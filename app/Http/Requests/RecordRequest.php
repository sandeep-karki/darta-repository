<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
            'register_no' => 'required|integer',
            'applicant' => 'required',
            'education_id' => 'required',
            'age' => 'required',
            'applicant_gender' => 'required',
            'applicant_contact' => 'required',
            'permanent_province' => 'required',
            'permanent_district' => 'required',
            'permanent_municipality' => 'required',
            'permanent_ward_no' => 'required',
            'temporary_province' => 'required',
            'temporary_district' => 'required',
            'temporary_municipality' => 'required',
            'temporary_ward_no' => 'required',
            'crime_id' => 'required',
            'cheat_id' => 'required',
            'suspect_name' => 'required',
            'suspect_contact_number' => 'required',
            'total_scam_amount' => 'required',
        ];
    }
}
