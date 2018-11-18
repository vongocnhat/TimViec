<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\ExperienceOfProfile;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\Home\ExperienceOfProfileHomeRepositoryInterface;

class ExperienceOfProfileHomeRepository implements ExperienceOfProfileHomeRepositoryInterface
{
    public function paginate($numberRows)
    {
        
    }

    public function findOrFail($id)
    {
        return ExperienceOfProfile::findOrFail($id);
    }

    public function store($experienceOfProfilesArray, $profileName)
    {
        foreach ($experienceOfProfilesArray as $key => $item) {
            $experienceOfProfiles = new ExperienceOfProfile();
            $experienceOfProfiles->fill($item);
            $experienceOfProfiles->profile_id = Auth::guard('employee')->user()->profiles()->where('name', $profileName)->first()->id;
            $experienceOfProfiles->start_at = $item['start_month_experience'] . '/' . $item['start_year_experience'];
            $experienceOfProfiles->ended_at = $item['end_month_experience'] . '/' . $item['end_year_experience'];
            $experienceOfProfiles->save();
        }   
    }

    public function update($request, $id)
    {   
        foreach ($experienceOfProfilesArray as $key => $item) {
            $experienceOfProfiles = $this->findOrFail($id);
            $experienceOfProfiles->fill($item);
            $experienceOfProfiles->profile_id = Auth::guard('employee')->user()->profiles()->where('name', $profileName)->first()->id;
            $experienceOfProfiles->start_at = $item['start_month_experience'] . '/' . $item['start_year_experience'];
            $experienceOfProfiles->ended_at = $item['end_month_experience'] . '/' . $item['end_year_experience'];
            $experienceOfProfiles->save();
        }   
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = ExperienceOfProfile::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = ExperienceOfProfile::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}