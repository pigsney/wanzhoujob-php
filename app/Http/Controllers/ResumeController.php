<?php


namespace App\Http\Controllers;


use App\Enums\Sex;
use App\Http\Requests\Api\ResumeRequest;

class ResumeController extends Controller
{
    public function store(ResumeRequest $request)
    {
    dd(1);
        $name = $request->get('name');
        $sex = $request->get('sex');
        $birthday = $request->get('birthday');
        $workExperience = $request->get('work_experience');
        $politicalOutlook = $request->get('political_outlook');
        $maritalStatus = $request->get('marital_status');
        $nativePlace = $request->get('native_place');
        $address = $request->get('address');
        $phone =  $request->get('phone');
        $email = $request->get('email');
        $introduce = $request->get('introduce');

    }

    public function show()
    {

    }

    public function index()
    {

    }
}