<?php

namespace App\Repositories\Eloquents;

use App\Models\Language;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\LanguageRepositoryInterface;

class LanguageRepository implements LanguageRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Language::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Language::findOrFail($id);
    }

    public function store($request)
    {
        $language = new Language();
        $language->name = $request->name;
        $language->save();
    }

    public function update($request, $id)
    {
        $language = Language::findOrFail($id);
        $language->name = $request->name;
        $language->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Language::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Language::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}