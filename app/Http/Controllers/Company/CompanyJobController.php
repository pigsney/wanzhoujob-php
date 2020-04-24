<?php


namespace App\Http\Controllers\Company;

use App\Dto\CompanyJobDto;
use App\Dto\CompanyJobListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CompanyJobRequest;
use App\Services\CompanyJobService;
use App\Services\JobService;

class CompanyJobController extends Controller
{
    private $service;

    public function __construct(CompanyJobService $service)
    {
        $this->service = $service;
    }

    public function index(CompanyJobRequest $request)
    {
        $listDto = new CompanyJobListDto();
        $listDto->setCompanyId($request->route('company'));
        $listDto->setTake($request->get('take'));
        $listDto->setType($request->get('type'));
        $listDto->setPage($request->get('page'));
        $listDto->setLimit($request->get('limit'));
        $listDto->setJobIds($request->get('job_ids'));
        $listDto->setJobId($request->get('job_id'));
        return $this->service->getList($listDto);
    }

    public function store(CompanyJobRequest $request)
    {
        $dto = new CompanyJobDto();
        $dto->setCompanyId($request->route('company'));
        $dto->setJobIds($request->get('job_ids'));
        $dto->setJobId($request->get('job_id'));
        return $this->service->store($dto);
    }
}