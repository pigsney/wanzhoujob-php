<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CompanyJobRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [];
    }
}