<?php


namespace App\Services;

use App\DTO\CompanyJobDTO;
use App\DTO\CompanyJobListDTO;
use App\DTO\JobListDTO;
use App\Models\CompanyJobMap;

class CompanyJobService
{
    private $response;

    private $jobService;

    private $companyService;

    public function __construct(JobService $jobService,CompanyService $companyService)
    {
        $this->companyService = $companyService;
        $this->jobService = $jobService;
        $this->response = response();
    }


    public function getList(CompanyJobListDTO $listDto)
    {

        $jobListDto = new JobListDTO();
        $jobListDto->setLimit($listDto->getLimit());
        $jobListDto->setPage($listDto->getPage());
        $jobListDto->setCompanyId($listDto->getCompanyId());
        $jobListDto->setIds($listDto->getJobIds());
        $jobListDto->setId($listDto->getJobId());
        return $this->jobService->getList($jobListDto);
    }

    public function store(CompanyJobDTO $batchDto)
    {
        $jobIds = collect($batchDto->getJobIds())->merge($batchDto->getJobId());
        $companyId = intval($batchDto->getCompanyId());
        $mapIds = [];
        $jobIds->each(function (int $jobId)use($companyId,&$mapIds){
           $mapIds[] = [
               'company_id' => $companyId,
               'job_id' => $jobId,
           ];
           return $mapIds;
        });

        try {
            \DB::beginTransaction();
            CompanyJobMap::query()->insert($mapIds);
            \DB::commit();
            $result = CompanyJobMap::query()->orderByDesc('created_at')
                ->with('company','job')
                ->limit(count($mapIds))->get(['job_id','company_id'])->toArray();
            return $this->response->success($result,"绑定成功");
        }catch (\Exception $exception){
            \DB::rollback();
            throw  $exception;
        }

    }
}