<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicantProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'first_name' => 'required',
            'last_name' => 'required',
            'first_name_nepali' => 'required',
            'last_name_nepali' => 'required',
            'dob_english' => 'required| date',
            'dob_nepali' => 'required| date',
            'father_name' => 'required',
            'mother_name' => 'required',
            'grandfather_name' => 'required',
            'citizenship_number' => 'required|unique',
            'issued_district' => 'required',
            'citizenship_front' => 'required',
            'citizenship_backend' => 'required',
            'profile_picture' => 'required',
            'signature' => 'required'
        ];
    }
}
