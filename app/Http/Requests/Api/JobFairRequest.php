<?php

namespace App\Http\Requests\Api;

class JobFairRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //        switch ($this->getMethod()):
//            case self::METHOD_POST:
//            $rules = [
//                'hold_time' => 'date|required',
//                'title' => 'string|required',
//                'host_unit' => 'string|required',
//                'introduce' => 'string|nullable',
//                'venue' => 'string|nullable',
//                'telephone' => 'string|nullable',
//                'img' => 'image|nullable|string'
//            ];

         return [];
    }
}
