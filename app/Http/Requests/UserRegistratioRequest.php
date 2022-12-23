<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistratioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'provinces'=>'required',
            'municipality'=>'required',
            'district'=>'required',
            'ward_no'=>'required',
             'street'=>'required',
             'address'=>'required',
            'birth_date'=>'required',
            'age'=>'required',
            'gender'=>'required',
             'citizenship_id'=>'required',
             'image'=>'required',
            'password'=>'required',

        ];
    }
}
