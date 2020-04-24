<?php


namespace App\Services\JobFair;


use App\Dto\JobFair\JobFairDto;
use App\Dto\JobFair\JobFairListDto;
use App\Enums\JobFairStatus;
use App\Exceptions\InvalidArgumentException;
use App\Exceptions\NotFoundException;
use App\Kernels\BaseService;
use App\Models\JobFair;
use Carbon\Carbon;

class JobFairService extends BaseService
{


    private $response;
    public function __construct()
    {
        $this->response = response();
    }

    /**
     * @param JobFairDto $detailDto
     * @return mixed
     * @throws \Exception
     */
    public function getDetail(JobFairDto $detailDto)
    {
        $jobFair = $this->findById($detailDto->getId());
        return $this->response->success($jobFair->toArray(),"");
    }

    /**
     * @param int $id
     * @return JobFair
     * @throws \Exception
     */
    private function findById(int $id) : JobFair
    {

        /** @var JobFair $jobFair */
        $jobFair =  JobFair::query()->where('id',$id)
            ->first();
        if ($jobFair  === null) throw new NotFoundException("不存在此招聘会");
        return $jobFair;
    }

    /**
     * @param JobFairDto $addDto
     * @return mixed
     * @throws \Exception
     */
    public function store(JobFairDto $addDto)
    {
        $this->checkJobFairParams($addDto);
        try {
            \DB::beginTransaction();
            $jobFair = $this->fillJobFairData($addDto,null);
            $jobFair->save();
            \DB::commit();
            return $this->response->success($jobFair->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }
    }

    /**
     * @param JobFairDto $jobFairDto
     * @throws \Exception
     */
    private function checkJobFairParams(JobFairDto $jobFairDto) : void
    {
        $date = $jobFairDto->getHoldingTime() ? Carbon::parse($jobFairDto->getHoldingTime()) : now();
        if ($date->lt(now())) throw new InvalidArgumentException("不可以选过去的时间");
    }

    private function fillJobFairData(JobFairDto $paramsDto, JobFair $model=null) : JobFair
    {
        $model = $model ?? new JobFair();
        return $model->fill([
            'holding_time' => strval($paramsDto->getHoldingTime() ?? data_get($model,'holding_time')),
            'title'        => strval($paramsDto->getTitle() ?? data_get($model,'title')),
            'host_unit'    => strval($paramsDto->getHostUnit() ?? data_get($model,'host_unit')),
            'introduce'    => strval($paramsDto->getIntroduce() ?? data_get($model,'introduce')),
            'venue'        => strval($paramsDto->getVenue() ?? data_get($model,'venue')),
            'telephone'    => strval($paramsDto->getTelephone() ?? data_get($model,'telephone')),
            'image'        => strval($paramsDto->getImage() ?? data_get($model,'image')),
            'status'       => intval($paramsDto->getStatus() ?? data_get($model,'status') ?? JobFairStatus::ENABLE_RESERVE),
        ]);
    }

    public function getList(JobFairListDto $jobFairListDto)
    {
        $name = strval($jobFairListDto->getName());
        $jobFairBuilder = JobFair::query();
        $jobFairBuilder->with('company','company.jobs');
        $name !== null && $jobFairBuilder->where('title','like',"%{$name}%");
        $jobFairs  = $jobFairBuilder->paginate($jobFairListDto->getLimit() ?? 15);
        $result = self::separate($jobFairs);
        $data = data_get($result,'data');
        $pagination = data_get($result,'pagination');
        return $this->response->success($data,'',$pagination);
    }

    /**
     * @param JobFairDto $updateDto
     * @return mixed
     * @throws \Exception
     */
    public function update(JobFairDto $updateDto)
    {
        $this->checkJobFairParams($updateDto);
        try {
            \DB::beginTransaction();
            $mode = $this->findById($updateDto->getId());
            $jobFair = $this->fillJobFairData($updateDto,$mode);
            $jobFair->save();
            \DB::commit();
            return $this->response->success($jobFair->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }
    }
}