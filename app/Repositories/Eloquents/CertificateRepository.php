<?php

namespace App\Repositories\Eloquents;

use App\Models\Certificate;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\CertificateRepositoryInterface;

class CertificateRepository implements CertificateRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Certificate::with('profile:id,name','graduate:id,name')->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Certificate::findOrFail($id);
    }

    public function store($request)
    {
        
    }

    public function update($request, $id)
    {
        
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