<?php


namespace App\Services;

use App\DTO\JobDTO;
use App\DTO\JobListDTO;
use App\Enums\Education;
use App\Enums\Sex;
use App\Enums\WorkExperience;
use App\Models\Job;

class JobService extends BaseService
{

    private $response;

    public function  __construct()
    {
        $this->response = response();
    }

    public function store(JobDTO $addDto)
    {
        $this->checkJobParams($addDto);
        try {
            \DB::beginTransaction();
            $job = $this->fillJobData($addDto,null);
            $job->save();
            \DB::commit();
            return $this->response->success($job->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }
    }

    /**
     * @param JobDTO $checkDto
     * @throws \Exception
     */
    private function checkJobParams(JobDTO $checkDto) : void
    {
        $sex = intval($checkDto->getSex());
        $work_experience = intval($checkDto->getWorkExperience());
        $education = intval($checkDto->getEducation());
        if (!collect(WorkExperience::labMaps())->keys()->contains($work_experience)) throw new \Exception("请重新选择工作经历");
        if (!collect(Education::labMaps())->keys()->contains($education)) throw new \Exception("请重新选择学历");
        if (!collect(Sex::labMaps())->keys()->contains($sex)) throw new \Exception("请重新选择性别");
    }

    private function fillJobData(JobDTO $paramsDto,Job $model=null) : Job
    {
        $model = $model ?? new Job();
        return $model->fill([
            'job_title'       => strval($paramsDto->getJobTitle() ?? data_get($model,'job_title')),
            'department'      => strval($paramsDto->getDepartment() ?? data_get($model,'department')),
            'number'          => intval($paramsDto->getNumber() ?? data_get($model,'number')),
            'education'       => intval($paramsDto->getEducation() ?? data_get($model,'education')),
            'work_experience' => intval($paramsDto->getWorkExperience()) ?? data_get($model,'work_experience'),
            'requirements'    => strval($paramsDto->getRequirements() ?? data_get($model,'requirements')),
            'sex'             => intval($paramsDto->getSex() ?? data_get($model,'sex')),
            'min_age'         => intval($paramsDto->getMinAge() ?? data_get($model,'min_age')),
            'max_age'         => intval($paramsDto->getMaxAge() ?? data_get($model,'max_age')),
            'salary_above'    => intval($paramsDto->getSalaryAbove() ?? data_get($model,'salary_above')),
            'salary_below'    => intval($paramsDto->getSalaryBelow() ?? data_get($model,'salary_below')),
            'manage_id'       => intval($paramsDto->getManageId() ?? data_get($model,'manage_id')),
        ]);
    }

    public function getList(JobListDTO $listDto)
    {
        $jobBuilder = Job::query();
        $jobIds = collect($listDto->getIds())->merge($listDto->getId());
        $companyId = $listDto->getCompanyId();
        $jobIds->count() > 0 && $jobBuilder->whereIn('id',$jobIds->all());
        $jobBuilder->with('company');
        $companyId > 0 && $jobBuilder->whereHas('company',function ($query)use($companyId){
            $query->where('company_id',$companyId);
        });
        $jobs  = $jobBuilder->paginate($listDto->getLimit() ?? 15);
        $result = self::separate($jobs);
        $data = data_get($result,'data');
        $pagination = data_get($result,'pagination');
        return $this->response->success($data,'',$pagination);
    }
}