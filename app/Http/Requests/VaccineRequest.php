<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineRequest extends FormRequest
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
            'center_number'=>'required|integer',
            'name'=>'required',
            'location'=>'required',
            'country'=>'required',
            'district'=>'required',
            'ward_number'=>'required|integer',
            'street'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'status'=>'required',
        ];
    }
}
