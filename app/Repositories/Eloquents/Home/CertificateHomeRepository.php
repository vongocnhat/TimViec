<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Certificate;
use App\Repositories\Contracts\Home\CertificateHomeRepositoryInterface;

class CertificateHomeRepository implements CertificateHomeRepositoryInterface
{
    public function paginate($numberRows)
    {
        
    }

    public function findOrFail($id)
    {
        return Certificate::findOrFail($id);
    }

    public function store($certificatesArray)
    {
        foreach ($certificatesArray as $key => $item) {
            $certificate = new Certificate();
            $item->profile_id = 1;
            $item->start_at = $item->start_month_certificate . '/' . $item->start_year_certificate;
            $item->ended_at = $item->end_month_certificate . '/' . $item->end_year_certificate;
            $certificate->fill((array)$item);
            $certificate->save();
        }   
    }

    public function update($request, $id)
    {   
        foreach ($certificatesArray as $key => $item) {
            $certificate = $this->findOrFail($id);
            $item->profile_id = 1;
            $item->start_at = $item->start_month_certificate . '/' . $item->start_year_certificate;
            $item->ended_at = $item->end_month_certificate . '/' . $item->end_year_certificate;
            $certificate->fill((array)$item);
            $certificate->save();
        }   
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Certificate::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Certificate::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}