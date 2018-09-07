<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserHoatDongStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
        return [
            'user_id' => 'required|integer',
            'hoatdong_id' => 'required|integer',
            'status' => 'required|string|max:45'
        ];
    }
}
