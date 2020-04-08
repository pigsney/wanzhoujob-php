<?php


namespace App\Http\Controllers;

use App\DTO\CompanyCategoryDTO;
use App\DTO\CompanyCategoryListDTO;
use App\DTO\CompanyJobDTO;
use App\DTO\CompanyJobListDTO;
use App\Http\Requests\CompanyCategoryRequest;
use App\Http\Requests\CompanyJobRequest;
use App\Services\CompanyCategoryService;
use App\Services\CompanyJobService;
use App\Services\JobService;

class CompanyCategoryController extends Controller
{
    private $service;

    public function __construct(CompanyCategoryService $service)
    {
        $this->service = $service;
    }

    public function index(CompanyCategoryRequest $request)
    {
        $listDto = new CompanyCategoryListDTO();
        $listDto->setCompanyId($request->route('company'));
        $listDto->setTake($request->get('take'));
        $listDto->setType($request->get('type'));
        $listDto->setPage($request->get('page'));
        $listDto->setLimit($request->get('limit'));
        $listDto->setCategoryIds($request->get('category_ids'));
        $listDto->setCategoryId($request->get('category_id'));
        return $this->service->getList($listDto);
    }

    public function store(CompanyCategoryRequest $request)
    {
        $dto = new CompanyCategoryDTO();
        $dto->setCompanyId($request->route('company'));
        $dto->setCategoryIds($request->get('category_ids'));
        $dto->setCategoryId($request->get('category_id'));
        return $this->service->store($dto);
    }
}