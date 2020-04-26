<?php


namespace App\Http\Controllers\Company;


use App\Dto\Company\CommonParamsIdDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CompanyJobResumeRequest;
use App\Services\Company\CompanyJobResumeService;

class CompanyJobResumeController extends Controller
{
    /**
     * @var CompanyJobResumeService
     */
    private $companyJobResumeService;


    public function __construct(CompanyJobResumeService $service)
    {
        $this->companyJobResumeService =$service;
    }

    public function delivery(CompanyJobResumeRequest $request)
    {
        $idsDto = new CommonParamsIdDto($request->all());
        return $this->companyJobResumeService->delivery($idsDto);
    }

    public function show(CompanyJobResumeRequest $request)
    {
        $idsDto = new CommonParamsIdDto($request->all());
        return $this->companyJobResumeService->getDetail($idsDto);
    }
}