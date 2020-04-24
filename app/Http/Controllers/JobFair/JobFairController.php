<?php


namespace App\Http\Controllers\JobFair;


use App\Dto\JobFairDto;
use App\Dto\JobFairListDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\JobFair\JobFairRequest;
use App\Services\JobFairService;

class JobFairController extends Controller
{

    private $service;

    public function __construct(JobFairService $service)
    {
        $this->service = $service;
    }

    public function index(JobFairRequest $listRequest)
    {
        $jobFairListDto = new JobFairListDto();
        $jobFairListDto->setLimit($listRequest->get('limit'));
        $jobFairListDto->setPage($listRequest->get('page'));
        $jobFairListDto->setName($listRequest->get('name'));
        $jobFairListDto->setTypes($listRequest->get('types'));
        return $this->service->getList($jobFairListDto);
    }

    public function store(JobFairRequest $request)
    {
        $jobFairDto = new JobFairDto();
        $jobFairDto->setHoldingTime($request->get('holding_time'));
        $jobFairDto->setTitle($request->get('title'));
        $jobFairDto->setHostUnit($request->get('host_unit'));
        $jobFairDto->setIntroduce($request->get('introduce'));
        $jobFairDto->setVenue($request->get('venue'));
        $jobFairDto->setTelephone($request->get('telephone'));
        $jobFairDto->setImage($request->get('image'));
        return $this->service->store($jobFairDto);
    }

    public function show(JobFairRequest $request)
    {
        $detailDto = new JobFairDto();
        $detailDto->setId($request->route('job_fair'));
        return $this->service->getDetail($detailDto);
    }

    public function update(JobFairRequest $request)
    {
        $updateDto = new JobFairDto();
        $updateDto->setId($request->route('job_fair'));
        $updateDto->setHoldingTime($request->get('holding_time'));
        $updateDto->setTitle($request->get('title'));
        $updateDto->setHostUnit($request->get('host_unit'));
        $updateDto->setIntroduce($request->get('introduce'));
        $updateDto->setVenue($request->get('venue'));
        $updateDto->setTelephone($request->get('telephone'));
        $updateDto->setImage($request->get('image'));
        return $this->service->update($updateDto);
    }

}