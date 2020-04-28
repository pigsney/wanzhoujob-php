<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/make/qr_code','UserController@makeQrCode');//生成推广人员的二维码
Route::namespace('Resume')->group(function (){
    Route::apiResource('resume','ResumeController');
});

Route::namespace('Company')->group(function (){
    Route::apiResource('company','CompanyController');
    Route::apiResource('company.jobs','CompanyJobController');
    Route::post('company/job/resume','CompanyJobResumeController@delivery');
    Route::apiResource('company.jobs.resume','CompanyJobController');
    Route::apiResource('company.category','CompanyCategoryController');
});

Route::namespace('Job')->group(function (){
    Route::apiResource('jobs','JobController');
});

Route::namespace('JobFair')->group(function (){
    Route::apiResource('job_fair','JobFairController');
    Route::get('job_fair/company','JobFairCompanyController@index');
    Route::apiResource('job_fair.company','JobFairCompanyController');
});

Route::namespace('Category')->group(function (){
    Route::apiResource('category','CategoryController');
});

Route::group(['middleware'=>'api','namespace'=>'Auth','prefix'=>'auth'],function (){
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
    Route::post('refresh','AuthController@refresh');
});