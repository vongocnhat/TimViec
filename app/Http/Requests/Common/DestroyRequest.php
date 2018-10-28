<?php

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Common\DestroyRequest;

class DestroyRequest extends FormRequest
{
    /**
     * Determine if the  is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (!$this->delete_id) {
            return [
                'ids' => 'required',
            ];
        } else {
            return [
                'delete_id' => 'required',
            ];
        }
    }

    public function messages()
    {
        return [
            'ids.required' => __('common.delete_required'),
        ];
    }
}
