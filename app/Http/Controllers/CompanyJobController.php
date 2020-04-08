<?php


namespace App\Http\Controllers;

use App\DTO\CompanyJobDTO;
use App\DTO\CompanyJobListDTO;
use App\Http\Requests\CompanyJobRequest;
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
        $listDto = new CompanyJobListDTO();
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
        $dto = new CompanyJobDTO();
        $dto->setCompanyId($request->route('company'));
        $dto->setJobIds($request->get('job_ids'));
        $dto->setJobId($request->get('job_id'));
        return $this->service->store($dto);
    }
}