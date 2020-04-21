<?php


namespace App\Http\Controllers;


use App\DTO\CategoryDTO;
use App\DTO\CategoryListDTO;
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
        $listDto = new CategoryListDTO();
        $listDto->setPage(request('page'));
        $listDto->setLimit(request('limit'));
        return $this->service->getList($listDto);
    }

    public function store()
    {
        $request = request();
        $addDto = new CategoryDTO();
        $addDto->setNames($request->get('names'));
        return $this->service->batchStore($addDto);
    }

    public function destroy()
    {

    }
}