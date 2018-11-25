<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Career;
use App\Models\Degree;
use App\Models\Office;
use App\Models\Profile;
use App\Models\Graduate;
use App\Models\Language;
use App\Models\Province;
use App\Models\Experience;
use App\Models\TypeOfWork;
use App\Models\Certificate;
use App\Models\ExperienceOfProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Repositories\Contracts\BaseRepositoryInterface;

use App\Repositories\Eloquents\Home\CertificateHomeRepository;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;
use App\Repositories\Eloquents\Home\ExperienceOfProfileHomeRepository;

class ProfileHomeRepository implements ProfileHomeRepositoryInterface, BaseRepositoryInterface
{
    public function paginate($numberRows)
    {
        return Profile::where('employee_id', Auth::guard('employee')->user()->id)->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Profile::with(['certificates', 'experienceOfProfiles', 'languages'])->findOrFail($id);
    }

    public function store($request)
    {
        // dd(json_decode($request->profileData, true));
        $languagesData = collect(json_decode($request->languagesData, true));
        $languagesData = $languagesData->mapWithKeys(function ($item) {
            $array = collect($item)->only('listening', 'speaking', 'reading', 'writing')->toArray();
            return [$item['language_id'] => $array];
        });
        $profile = new Profile();
        $profile->employee_id = Auth::guard('employee')->user()->id;
        $profile->fill(json_decode($request->profileData, true));
        $profile->profile_img = '';
        $profile->save();
        $profile->profile_img = $this->saveImg($request->profile_img, $profile->id);
        $profile->save();
        $certificates = collect(json_decode($request->certificatesData, true))->map(function ($item) {
            $m = new Certificate();
            $m->fill($item);
            return $m;
        });
        $profile->certificates()->saveMany($certificates);
        $experienceOfProfiles = collect(json_decode($request->experienceOfProfilesData, true))->map(function ($item) {
            $m = new ExperienceOfProfile();
            $m->fill($item);
            return $m;
        });
        $profile->experienceOfProfiles()->saveMany($experienceOfProfiles);
        $profile->provinces()->attach($request->provinces_id);
        $profile->languages()->attach($languagesData);
    }

    public function update($request, $id)
    {
        $languagesData = collect(json_decode($request->languagesData, true));
        $languagesData = $languagesData->mapWithKeys(function ($item) {
            $array = collect($item)->only('listening', 'speaking', 'reading', 'writing')->toArray();
            return [$item['language_id'] => $array];
        });
        $profile = $this->findOrFail($id);
        $profile->fill(json_decode($request->profileData, true));
        if($request->profile_img) {
            Storage::disk('uploads')->delete('img/profiles/' . $profile->profile_img);
            $profile->profile_img = $this->saveImg($request->profile_img, $id);
        }
        $profile->save();
        $certificates = collect(json_decode($request->certificatesData, true))->map(function ($item) {
            return collect($item)->only(
            'graduate_id',
            'name',
            'school',
            'start_at',
            'ended_at',
            'major')->toArray();
        })->toArray();
        $profile->certificates()->sync($certificates);
        $experienceOfProfiles = collect(json_decode($request->experienceOfProfilesData, true))->map(function ($item) {
            return collect($item)->only(
            'company_name',
            'office_id',
            'start_at',
            'ended_at',
            'job_description',
            'achievement')->toArray();
        })->toArray();
        $profile->experienceOfProfiles()->sync($experienceOfProfiles);
        $profile->provinces()->sync($request->provinces_id);
        $profile->languages()->sync($languagesData);
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            Storage::disk('uploads')->delete('img/profiles/' . Profile::findOrFail($request->delete_id)->profile_img);
            $deleted = Profile::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            foreach ($request->ids as $id)
            {
                Storage::disk('uploads')->delete('img/profiles/' . Profile::findOrFail($id)->profile_img);
            }
            $deleted = Profile::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }

    public function saveImg($image, $profileID)
    {
        if ($image) {
            // $extension = File::extension($image->getClientOriginalName());
            $extension = '.jpg';
            $fileName = $profileID . '.' . $extension;
            $imageMedium = Image::make($image);
            $imageMedium->resize(270, 270);
            $imageMedium->save(public_path('img/profiles/' . $fileName));
            return $fileName;
        } else {
            return 'default.png';
        }
    }

    public function careers()
    {
        return Career::orderBy('id')->pluck('name', 'id');
    }

    public function degrees()
    {
        return Degree::orderBy('id')->pluck('name', 'id');
    }

    public function typeOfWorks()
    {
        return TypeOfWork::orderBy('id')->pluck('name', 'id');
    }

    public function offices()
    {
        return Office::orderBy('id')->pluck('name', 'id');
    }

    public function experiences()
    {
        return Experience::orderBy('id')->pluck('name', 'id');
    }

    public function provinces()
    {
        return Province::orderBy('id')->pluck('name', 'id');
    }

    public function graduates()
    {
        return Graduate::orderBy('id')->pluck('name', 'id');
    }

    public function languages()
    {
        return Language::orderBy('id')->pluck('name', 'id');
    }
}