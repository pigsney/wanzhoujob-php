<?php


namespace App\Http\Controllers\Company;

use App\Dto\CompanyCategoryDto;
use App\Dto\CompanyCategoryListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CompanyCategoryRequest;
use App\Services\CompanyCategoryService;

class CompanyCategoryController extends Controller
{
    private $service;

    public function __construct(CompanyCategoryService $service)
    {
        $this->service = $service;
    }

    public function index(CompanyCategoryRequest $request)
    {
        $listDto = new CompanyCategoryListDto();
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
        $dto = new CompanyCategoryDto();
        $dto->setCompanyId($request->route('company'));
        $dto->setCategoryIds($request->get('category_ids'));
        $dto->setCategoryId($request->get('category_id'));
        return $this->service->store($dto);
    }
}