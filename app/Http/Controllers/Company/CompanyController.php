<?php

namespace App\Http\Controllers\Company;

use App\Dto\Company\CompanyDto;
use App\Dto\Company\CompanyListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CompanyRequest;
use App\Models\Company;
use App\Services\Company\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    private $service;

    public function __construct(CompanyService $companyService)
    {
        $this->service = $companyService;
    }

    public function index(CompanyRequest $listRequest)
    {
        $listDto = new CompanyListDto();
        $listDto->setLimit($listRequest->get('limit'));
        $listDto->setPage($listRequest->get('page'));
        return $this->service->getList($listDto);
    }




    public function store(CompanyRequest $request)
    {
        $storeDto = new CompanyDto($request->all());
        $storeDto->setLogo($request->file('logo'));
        return $this->service->store($storeDto);

    }


    public function show(CompanyRequest $request)
    {
        $detailDto = new CompanyDto();
        $detailDto->setId($request->route('company'));
        return $this->service->getDetail($detailDto);
    }


    public function edit(Company $company)
    {
        //
    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}
