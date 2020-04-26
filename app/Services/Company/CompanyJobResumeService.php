<?php


namespace App\Services\Company;


use App\Dto\Company\CommonParamsIdDto;
use App\Dto\Company\CompanyJobListDto;
use App\Kernels\BaseService;
use App\Models\CompanyJobResumeMap;

class CompanyJobResumeService extends BaseService
{

    private $companyJobService;

    private $response;

    public function __construct(CompanyJobService $companyJobService)
    {
        $this->companyJobService = $companyJobService;
        $this->response =response();
    }


    public function delivery(CommonParamsIdDto $idsDto)
    {
        $companyJobListDto = new CompanyJobListDto();
        $jobId = $idsDto->getJobId();
        $companyJobListDto->setJobId($jobId);
        $companyJobsResponse = $this->companyJobService->getList($companyJobListDto);
        $companyJobs = json_decode($companyJobsResponse->getContent(),true);
        $job  = head($companyJobs['data']);
        $company  = head($job['company']);
        $companyId = $company['id'];
        $resumeId = $idsDto->getResumeId();
        try {
            \DB::beginTransaction();
            $model = new CompanyJobResumeMap();
            $model->fill([
                'job_id' => $jobId,
                'company_id'=>$companyId,
                'resume_id' => $resumeId
            ]);
            $model->save();
            $model->load(['resume','job','company']);
            \DB::commit();
            return $this->response->success($model->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }

    }

    //这里需实现job查看详情
    public function getDetail(CommonParamsIdDto $idsDto)
    {
    }
}