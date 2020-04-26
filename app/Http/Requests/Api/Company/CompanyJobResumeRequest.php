<?php


namespace App\Http\Requests\Api\Company;


use App\Http\Requests\Api\FormRequest;

class CompanyJobResumeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'job_id' => 'required|int',
        ];
    }
}