<?php


namespace App\Http\Controllers\JobFair;


use App\Dto\JobFairCompanyDto;
use App\Dto\JobFairCompanyListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\JobFair\JobFairCompanyRequest;
use App\Services\JobFairCompanyService;
use Illuminate\Http\Request;

class JobFairCompanyController extends Controller
{
    private $service;

    public function __construct(JobFairCompanyService $service)
    {
        $this->service = $service;
    }

    public function index(JobFairCompanyRequest $request)
    {
        $listDto = new JobFairCompanyListDto();
        $listDto->setPage($request->get('page'));
        $listDto->setLimit($request->get('limit'));
        $listDto->setTake($request->get('take'));
        $listDto->setType($request->get('type'));
        $listDto->setRecruitmentId($request->get('recruitment_id'));
        return $this->service->getList($listDto);
    }

    public function store(JobFairCompanyRequest $request)
    {
        $addDto = new JobFairCompanyDto();
        $addDto->setCompanyId($request->get('company_id'));
        $addDto->setCompanyIds($request->get('company_ids'));
        $addDto->setJobFairId($request->route('job_fair'));
        return $this->service->store($addDto);
    }

    public function destroy(JobFairCompanyRequest $deleteRequest)
    {
        $deleteDto = new JobFairCompanyDto();
        $deleteDto->setJobFairId($deleteRequest->route('job_fair'));
        $deleteDto->setCompanyId($deleteRequest->route('company'));
        return $this->service->delete($deleteDto);
    }
}