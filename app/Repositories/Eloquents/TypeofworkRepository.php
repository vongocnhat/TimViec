<?php

namespace App\Repositories\Eloquents;

use App\Models\TypeOfWork;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\TypeofworkRepositoryInterface;

class TypeofworkRepository implements TypeofworkRepositoryInterface
{
	public function paginate($numberRows)
    {
        return TypeOfWork::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return TypeOfWork::findOrFail($id);
    }

    public function store($request)
    {
        $typeOfWork = new TypeOfWork();
        $typeOfWork->name = $request->name;
        $typeOfWork->save();
    }

    public function update($request, $id)
    {
        $typeOfWork = TypeOfWork::findOrFail($id);
        $typeOfWork->name = $request->name;
        $typeOfWork->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = TypeOfWork::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = TypeOfWork::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}