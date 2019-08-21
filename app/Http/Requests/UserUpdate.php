<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:10',
            'address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'A name is required',
            'name.max'  => 'A name is less than 50 characters',
            'phone.required'  => 'A name is required',
            'phone.max'  => 'A phone less than 10 characters',
            'address.required'  => 'A address is required',
        ];
    }
}
