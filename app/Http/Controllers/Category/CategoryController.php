<?php


namespace App\Http\Controllers\Category;


use App\Dto\CategoryDto;
use App\Dto\CategoryListDto;
use App\Http\Requests\Api\Category\CategoryRequest;
use App\Services\CategoryService;

class CategoryController
{

    private $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $listDto = new CategoryListDto();
        $listDto->setPage(request('page'));
        $listDto->setLimit(request('limit'));
        return $this->service->getList($listDto);
    }

    public function store(CategoryRequest $request)
    {
        $addDto = new CategoryDto($request->all());
        return $this->service->batchStore($addDto);
    }

    public function destroy()
    {

    }
}