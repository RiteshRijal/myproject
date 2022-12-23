<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignVaccineRequest extends FormRequest
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
           'category_id'=>'required',
            'batch_no'=>'required',
            'doze_id'=>'required',
            'center_id'=>'required',
            'no_of_vaccines'=>'required',
            'assign_date'=>'required',
            'valid_date'=>'required',
            'assign_vaccines'=>'required',
            'remaining_vaccines'=>'required',
        ];
    }
}
