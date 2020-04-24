<?php


namespace App\Http\Requests\Api\Category;


use App\Http\Requests\Api\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'names'=> 'array',
            'names.*' => 'string|nullable',
        ];
    }
}