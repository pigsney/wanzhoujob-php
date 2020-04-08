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
Route::get('job_fair/company','JobFairCompanyController@index');
Route::apiResources([
    'company' => 'CompanyController',
    'company.jobs' => 'CompanyJobController',
    'jobs' => 'JobController',
    'category' => 'CategoryController',
    'job_fair' => 'JobFairController',
    'job_fair.company' => 'JobFairCompanyController',
    'company.category' => 'CompanyCategoryController',
]);