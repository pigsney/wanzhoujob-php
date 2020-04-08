<?php


namespace App\Services;

use App\DTO\CompanyListDTO;
use App\DTO\JobFairCompanyListDTO;
use App\Models\JobFair;
use App\DTO\JobFairCompanyDTO;
use App\Models\JobFairCompanyMap;
use Illuminate\Support\Arr;

class JobFairCompanyService extends BaseService
{
    private $response;

    private $companyService;

    private $jobFairService;

    public function __construct(CompanyService $companyService,JobFairService $jobFairService)
    {
        $this->companyService = $companyService;
        $this->response = response();
        $this->jobFairService = $jobFairService;
    }


    public function getList(JobFairCompanyListDTO $listDto)
    {
        $recruitmentId = $listDto->getRecruitmentId();
        if ($recruitmentId == 0){
            /** @var JobFair $recentlyJobFair */
            $recentlyJobFair = JobFair::query()->orderByDesc('created_at')->limit(1)->first();
            $recruitmentId = intval(data_get($recentlyJobFair,'id'));
        }
        $companyListDto = new CompanyListDTO();
        $companyListDto->setJobFairId($recruitmentId);
        $companyListDto->setType($listDto->getType());
        $companyListDto->setPage($listDto->getPage());
        $companyListDto->setLimit($listDto->getLimit());
        $jobFairCompany = $this->companyService->getList($companyListDto);
        /** @var array $result */
        $result = json_decode($jobFairCompany->getContent(),true);
        $list = $this->buildJobFairCompanyList($result,$listDto);
        return $this->response->success($list,'',data_get($result,'pagination'));
    }

    public function store(JobFairCompanyDTO $addDto)
    {
        $companyIds = collect($addDto->getCompanyIds())->merge($addDto->getCompanyId());
        $jobFairId = intval($addDto->getJobFairId());
        $mapIds = [];
        $companyIds->each(function (int $companyId)use($jobFairId,&$mapIds){
            $mapIds[] = [
                'company_id' => $companyId,
                'job_fair_id' => $jobFairId,
            ];
            return $mapIds;
        });

        try {
            \DB::beginTransaction();
            JobFairCompanyMap::query()->insert($mapIds);
            \DB::commit();
            $result = JobFairCompanyMap::query()->orderByDesc('created_at')
                ->with('job_fair','company')
                ->limit(count($mapIds))->get(['job_fair_id','company_id'])->toArray();
            return $this->response->success($result,"绑定成功");
        }catch (\Exception $exception){
            \DB::rollback();
            throw  $exception;
        }

    }

    public function delete(JobFairCompanyDTO $deleteDto)
    {
        try {
            \DB::beginTransaction();

            /** @var JobFairCompanyMap $current */
            $current = JobFairCompanyMap::query()->where('job_fair_id',$deleteDto->getJobFairId())
                ->where('company_id',$deleteDto->getCompanyId())->first();
            if ($current === null ) throw new \Exception("暂无法移除,请检查是否存在");
            $current->delete();
            \DB::commit();
            return $this->response->success($current->toArray(),"删除成功");
        }catch (\Exception $exception){
            \DB::rollback();
            throw  $exception;
        }
    }

    private function buildJobFairCompanyList(array $result,JobFairCompanyListDTO $listDTO) : array
    {
        $take = intval($listDTO->getTake());
        $data = collect(Arr::get($result,'data'));
        if ($take>0){
            $data = $data->transform(function ($item)use($take){
                $jobs = collect(data_get($item,'jobs'))->sortByDesc('created_at')->take($take)->all();
                data_set($item,'jobs',$jobs);
                return $item;
            });
        }
        $jobFairArr = data_get($data,'*.job_fair.*');
        $jobFair = head($jobFairArr);
        $type = intval($listDTO->getType());
        $job_company_job_count = collect(data_get($data,'*.jobs'))->flatten(1)->count();
        $jobCompany = $data->transform(function ($item){
            data_set($item,'company_name',data_get($item,'name'));
            data_set($item,'id',data_get($item,'url'));
            $jobs = collect(data_get($item,'jobs'))->values()->all();
            data_set($item,'job',$jobs);
            return Arr::only($item,['id','job','company_name','logo']);
        });

        return  [
            'type' => $type,
            'name' => data_get($jobFair,'title'),
            'image' => data_get($jobFair,'image'),
            'introduce' => data_get($jobFair,'introduce'),
            'is_job_fair_type' => $type > 0 ? 1: 0,
            'job_company_count' => count($jobFairArr),
            'job_company_job_count' => $job_company_job_count,
            'job_fair_type' => $type,
            'job_company' => $jobCompany,
        ];
    }
}