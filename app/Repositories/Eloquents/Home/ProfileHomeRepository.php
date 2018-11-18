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
use Illuminate\Support\Facades\Auth;
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
        return Profile::with('certificates')->findOrFail($id);
    }

    public function store($request)
    {
        $languagesData = collect(json_decode($request->languagesData, true));
        $languagesData = $languagesData->mapWithKeys(function ($item) {
            $array = collect($item)->except(['_token', 'key', 'language_id'])->toArray();
            return [$item['language_id'] => $array];
        });
        $profile = new Profile();
        $profile->employee_id = Auth::guard('employee')->user()->id;
        $profile->fill(json_decode($request->profileData, true));
        $profile->profile_img = 'ten anh';
        $profile->save();
        $cer = new CertificateHomeRepository();
        $cer->store(json_decode($request->certificatesData, true), $profile->name);
        $exp = new ExperienceOfProfileHomeRepository();
        $exp->store(json_decode($request->experienceOfProfilesData, true), $profile->name);
        $profile->provinces()->attach($request->provinces_id);
        $profile->languages()->attach($languagesData);
    }

    public function update($request, $id)
    {
        $profile = $this->findOrFail($id);
        $profile->fill($request->all());
        $profile->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Profile::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Profile::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
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