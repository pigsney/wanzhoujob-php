<?php


namespace App\Http\Requests\Api\Auth;


use App\Http\Requests\Api\FormRequest;

class AuthRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];
        switch ($this->route()->getActionMethod()):
            case 'login':
                $rules = [
                    "identifier" => "required|string|max:50:min:3",
                    "credential" => "required|string|max:100|min:6",
                ];
            break;
         endswitch;
         return $rules;
    }
}