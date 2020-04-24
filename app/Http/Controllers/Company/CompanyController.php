<?php

namespace App\Http\Controllers\Company;

use App\Dto\CompanyDto;
use App\Dto\CompanyListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CompanyRequest;
use App\Models\Company;
use App\Services\CompanyService;
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
        $storeDto = new CompanyDto();
        $storeDto->setName($request->get('name'));
        $storeDto->setFullName($request->get('full_name'));
        $storeDto->setNature($request->get('nature'));
        $storeDto->setScale($request->get('scale'));
        $storeDto->setWelfare($request->get('welfare'));
        $storeDto->setLogo($request->get('logo'));
        $storeDto->setUrl($request->get('url'));
        $storeDto->setAddress($request->get('address'));
        $storeDto->setStandbyAddress($request->get('standby_address'));
        $storeDto->setContacts(auth()->id() ?? 0);
        $storeDto->setPhone($request->get('phone'));
        $storeDto->setLandline($request->get('landline'));
        $storeDto->setEmail($request->get('email'));
        $storeDto->setIntroduce($request->get('introduce'));
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
