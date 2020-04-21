<?php


namespace App\Http\Requests;


use Illuminate\Http\Request;

class ResumeRequest extends Request
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [];
    }
}