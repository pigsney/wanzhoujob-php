<?php

namespace App\Http\Controllers;

use App\DTO\JobDTO;
use App\DTO\JobListDTO;
use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private $service;

    public function __construct(JobService $jobService)
    {
        $this->service = $jobService;
    }

    public function index(JobRequest $listRequest)
    {
        $listDto = new JobListDTO();
        $listDto->setLimit($listRequest->get('limit'));
        $listDto->setPage($listRequest->get('page'));
        return $this->service->getList($listDto);
    }




    public function store(JobRequest $request)
    {
        $storeDto = new JobDTO();
        $storeDto->setJobTitle($request->get('job_title'));
        $storeDto->setDepartment($request->get('department'));
        $storeDto->setNumber($request->get('number'));
        $storeDto->setEducation($request->get('education'));
        $storeDto->setWorkExperience($request->get('work_experience'));
        $storeDto->setRequirements($request->get('requirements'));
        $storeDto->setSex($request->get('sex'));
        $storeDto->setMinAge($request->get('min_age') ?? 0  );
        $storeDto->setMaxAge($request->get('max_age') ?? 0);
        $storeDto->setManageId(auth()->id() ?? 0);
        $storeDto->setSalaryAbove($request->get('salary_above') ?? 0);
        $storeDto->setSalaryBelow($request->get('salary_below') ?? 0);
        return $this->service->store($storeDto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
