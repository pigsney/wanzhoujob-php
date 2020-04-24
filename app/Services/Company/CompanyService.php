<?php


namespace App\Services\Company;

use App\Dto\Company\CompanyDto;
use App\Dto\Company\CompanyListDto;
use App\Enums\CompanyNature;
use App\Enums\CompanyScale;
use App\Exceptions\InvalidArgumentException;
use App\Exceptions\NotFoundException;
use App\Kernels\BaseService;
use App\Models\Company;
use Illuminate\Support\Collection;

class CompanyService extends BaseService
{

    private $response;

    public function  __construct()
    {
        $this->response = response();
    }


    public function getDetail(CompanyDto $detailDto)
    {
        $company = $this->findById($detailDto->getId());
        return $this->response->success($company->toArray(),"");
    }

    /**
     * @param int $id
     * @return Company
     */
    private function findById(int $id) : Company
    {

        /** @var Company $company */
        $company =  Company::query()->where('id',$id)->first();
        if ($company  === null) throw new NotFoundException("不存在此企业(公司)");
        return $company;
    }

    /**
     * @param CompanyDto $addDto
     * @return mixed
     * @throws \Exception
     */
    public function store(CompanyDto $addDto)
    {
        $this->checkCompanyParams($addDto);
        try {
            \DB::beginTransaction();
            $company = $this->fillCompanyData($addDto,null);
            $company->save();
            \DB::commit();
            return $this->response->success($company->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }
    }

    /**
     * @param CompanyDto $checkDto
     */
    private function checkCompanyParams(CompanyDto $checkDto) : void
    {
        $nature = intval($checkDto->getNature());
        $scale = intval($checkDto->getScale());
        if (!collect(CompanyScale::labMaps())->keys()->contains($scale)) throw new InvalidArgumentException("请重新选择规模");
        if (!collect(CompanyNature::labMaps())->keys()->contains($nature)) throw new InvalidArgumentException("请重新选择企业性质");
    }

    private function fillCompanyData(CompanyDto $paramsDto, Company $model=null) : Company
    {
        $model = $model ?? new Company();
        return $model->fill([
            'name'            => strval($paramsDto->getName() ?? data_get($model,'name')),
            'full_name'       => strval($paramsDto->getFullName() ?? data_get($model,'full_name')),
            'nature'          => intval($paramsDto->getNature() ?? data_get($model,'nature')),
            'scale'           => intval($paramsDto->getScale() ?? data_get($model,'scale')),
            'welfare'         => json_encode($paramsDto->getWelfare()) ?? data_get($model,'welfare'),
            'logo'            => strval($paramsDto->getLogo() ?? data_get($model,'logo')),
            'url'             => strval($paramsDto->getUrl() ?? data_get($model,'url')),
            'address'         => strval($paramsDto->getAddress() ?? data_get($model,'address')),
            'standby_address' => strval($paramsDto->getStandbyAddress() ?? data_get($model,'standby_address')),
            'phone'           => strval($paramsDto->getPhone() ?? data_get($model,'phone')),
            'landline'        => strval($paramsDto->getLandline() ?? data_get($model,'landline')),
            'email'           => strval($paramsDto->getEmail() ?? data_get($model,'email')),
            'introduce'       => strval($paramsDto->getIntroduce() ?? data_get($model,'introduce')),
            'contacts'        => intval($paramsDto->getContacts() ?? data_get($model,'contacts')),
        ]);
    }

    public function getList(CompanyListDto $listDto)
    {
        $companyBuilder = Company::query();
        $companyBuilder->with('jobs','job_fair','types');
        $type = intval($listDto->getType());
        $jobFairId = intval($listDto->getJobFairId());
        $jobFairId > 0 && $companyBuilder->whereHas('job_fair',function ($query)use($jobFairId){
            $query->where('job_fair.id',$jobFairId);
        });
        $type > 0 && $companyBuilder->whereHas('types',function ($query)use($type){
            $query->where('category.id',$type);
        });
        $company = $companyBuilder->paginate($listDto->getLimit() ?? 15);
        $result = self::separate($company);
        $data = data_get($result,'data');
        $pagination = data_get($result,'pagination');
        return $this->response->success($data,'',$pagination);
    }

}