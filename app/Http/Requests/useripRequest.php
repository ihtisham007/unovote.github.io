<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class useripRequest extends FormRequest
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
            'gender' => 'required|not_in:0',
            'age' => 'required|not_in:0',
            'location' => 'required|not_in:0'
        ];
    }
    //create message for rules
    public function messages()
    {
        return [
            'gender.not_in' => "Gender must be selected",
            'age.not_in' => "Age must be selected",
            'location.not_in' => "location must be selected"
        ];
    }
}
