<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CompanyCategoryRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [];
    }
}