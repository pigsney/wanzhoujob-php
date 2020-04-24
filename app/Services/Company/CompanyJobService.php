<?php


namespace App\Services\Company;

use App\Dto\Company\CompanyJobDto;
use App\Dto\Company\CompanyJobListDto;
use App\Dto\Job\JobListDto;
use App\Models\CompanyJobMap;
use App\Services\Job\JobService;

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


    public function getList(CompanyJobListDto $listDto)
    {

        $jobListDto = new JobListDto();
        $jobListDto->setLimit($listDto->getLimit());
        $jobListDto->setPage($listDto->getPage());
        $jobListDto->setCompanyId($listDto->getCompanyId());
        $jobListDto->setIds($listDto->getJobIds());
        $jobListDto->setId($listDto->getJobId());
        return $this->jobService->getList($jobListDto);
    }

    /**
     * @param CompanyJobDto $batchDto
     * @return mixed
     * @throws \Exception
     */
    public function store(CompanyJobDto $batchDto)
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