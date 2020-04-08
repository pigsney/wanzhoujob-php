<?php


namespace App\Services;

use App\DTO\CategoryListDTO;
use App\DTO\CompanyCategoryDTO;
use App\DTO\CompanyCategoryListDTO;
use App\Models\CompanyCategoryMap;
use App\Models\CompanyJobMap;
use App\Models\JobFair;

class CompanyCategoryService extends BaseService
{
    private $response;

    private $categoryService;

    private $companyService;

    public function __construct(CategoryService $categoryService,CompanyService $companyService)
    {
        $this->companyService = $companyService;
        $this->categoryService = $categoryService;
        $this->response = response();
    }


    public function getList(CompanyCategoryListDTO $listDto)
    {

        $jobListDto = new CategoryListDTO();
        $jobListDto->setLimit($listDto->getLimit());
        $jobListDto->setPage($listDto->getPage());
        $jobListDto->setCompanyId($listDto->getCompanyId());
        $jobListDto->setCategoryIds($listDto->getCategoryIds());
        $jobListDto->setCategoryId($listDto->getCategoryId());
        return $this->categoryService->getList($jobListDto);
    }

    public function store(CompanyCategoryDTO $batchDto)
    {
        $categoryIds = collect($batchDto->getCategoryIds())->merge($batchDto->getCategoryId());
        $companyId = intval($batchDto->getCompanyId());
        $mapIds = [];
        $categoryIds->each(function (int $categoryId)use($companyId,&$mapIds){
           $mapIds[] = [
               'company_id' => $companyId,
               'category_id' => $categoryId,
           ];
           return $mapIds;
        });

        try {
            \DB::beginTransaction();
            CompanyCategoryMap::query()->insert($mapIds);
            \DB::commit();
            $result = CompanyCategoryMap::query()->orderByDesc('created_at')
                ->with('company','category')
                ->limit(count($mapIds))->get(['category_id','company_id'])->toArray();
            return $this->response->success($result,"绑定成功");
        }catch (\Exception $exception){
            \DB::rollback();
            throw  $exception;
        }

    }
}