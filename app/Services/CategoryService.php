<?php


namespace App\Services;


use App\DTO\CategoryDTO;
use App\DTO\CategoryListDTO;
use App\Models\Category;

class CategoryService extends BaseService
{

    private $response;

    public function __construct()
    {
        $this->response = response();
    }

    public function getList(CategoryListDTO $listDto)
    {
        $categoryBuilder = Category::query();
        $categoryIds = collect($listDto->getCategoryIds())->merge($listDto->getCategoryId());
        $companyId = $listDto->getCompanyId();
        $categoryIds->count() > 0 && $categoryBuilder->whereIn('id',$categoryIds->all());
        $categoryBuilder->with('company');
        $companyId > 0 && $categoryBuilder->whereHas('company',function ($query)use($companyId){
            $query->where('company_id',$companyId);
        });
        $category  = $categoryBuilder->paginate($listDto->getLimit() ?? 15,['id','name']);
        $result = self::separate($category);
        $data = data_get($result,'data');
        $pagination = data_get($result,'pagination');
        return $this->response->success($data,'',$pagination);
    }

    public function batchStore(CategoryDTO $typeDto)
    {
        try {
            \DB::beginTransaction();
            $names = [];
            collect($typeDto->getNames())->each(function ($name)use(&$names){
                $names[] = ['name'=>$name];
                return $names;
            });
            Category::query()->insert($names);
            \DB::commit();

        }catch (\Exception $exception){
            \DB::rollBack();
            throw $exception;
        }
        $result = Category::query()->orderByDesc('created_at')->limit(count($names))->get(['id','name'])->toArray();
        return $this->response->success($result,"添加成功");
    }

    /**
     * 修改单个分类
     * @param CategoryDTO $updateDto
     * @throws \Exception
     */
    public function updateCategoryName(CategoryDTO $updateDto)
    {
        try {
            $id = $updateDto->getId();
            $model = $this->findById($id);
            $model->name = strval($updateDto->getName());
            $model->save();
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public function delete()
    {

    }

    /**
     * @param int $id
     * @return Category
     * @throws \Exception
     */
    private function findById(int $id) : Category
    {
        /** @var Category $categoryModel */
        $categoryModel = Category::query()->find($id);
        if ($categoryModel === null) throw new \Exception("暂未定义该分类");
        return $categoryModel;
    }
}