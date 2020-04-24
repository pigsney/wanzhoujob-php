<?php


namespace App\Services\Resume;


use App\Kernels\BaseService;

use App\Dto\Resume\ResumeDto;
use App\Models\Resume;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ResumeService extends BaseService
{

    private $response;

    public function __construct()
    {
        $this->response = response();
    }

    public function saveResume(ResumeDto $paramsDto)
    {
      //  $this->checkResumeParams($paramsDto);
        try {
            \DB::beginTransaction();
            $resume = $this->fillResumeData($paramsDto,null);
            $resume->save();
            \DB::commit();
            return $this->response->success($resume->toArray(),"");
        }catch (\Exception $exception){
            \DB::rollback();
            throw $exception;
        }
    }

    private function fillResumeData(ResumeDto $paramsDto, Resume $model=null) : Resume
    {
        //photo需要单独上传
        $model = $model ?? new Resume();
        /** @var UploadedFile $photo */
        $photo = $paramsDto->getPhoto();
        $phone = intval($paramsDto->getPhone() ?? data_get($model,'phone'));
        if ($photo) $this->uploadPhoto($model,$photo,$phone);
        return $model->fill([
            'id'           => $paramsDto->getId() ?? null,
            'name' => strval($paramsDto->getName() ?? data_get($model,'name')),
            'high'        => intval($paramsDto->getHigh() ?? data_get($model,'high')),
            'birthday'    => strval($paramsDto->getBirthday() ?? data_get($model,'birthday')),
            'introduce'    => strval($paramsDto->getIntroduce() ?? data_get($model,'introduce')),
            'sex'        => intval($paramsDto->getSex() ?? data_get($model,'sex')),
            'phone'    => $phone,
            'work_experience'        => intval($paramsDto->getWorkExperience() ?? data_get($model,'work_experience')),
            'educational_level'       => intval($paramsDto->getEducationalLevel() ?? data_get($model,'educational_level')),
            'political_outlook'        => strval($paramsDto->getPoliticalOutlook() ?? data_get($model,'political_outlook')),
            'marital_status'    => intval($paramsDto->getMaritalStatus() ?? data_get($model,'marital_status')),
            'native_place'    => strval($paramsDto->getNativePlace() ?? data_get($model,'native_place')),
            'address'        => strval($paramsDto->getAddress() ?? data_get($model,'address')),
            'email'    => strval($paramsDto->getEmail() ?? data_get($model,'email')),
            'job_status'        => intval($paramsDto->getJobStatus() ?? data_get($model,'job_status')),
            'job_intention'       => json_encode($paramsDto->getJobIntention() ?? data_get($model,'job_intention')),
            'work_history'    => json_encode($paramsDto->getWorkHistory() ?? data_get($model,'work_history')),
            'educational_type'        => intval($paramsDto->getEducationalType() ?? data_get($model,'educational_type')),
            'educational_background'    => json_encode($paramsDto->getEducationalBackground() ?? data_get($model,'educational_background')),
            'project_history'        => json_encode($paramsDto->getProjectHistory() ?? data_get($model,'project_history')),
            'language_ability'       => json_encode($paramsDto->getLanguageAbility() ?? data_get($model,'language_ability')),
            'skill_expertise'    => json_encode($paramsDto->getSkillExpertise() ?? data_get($model,'skill_expertise')),
            'certificate'        => json_encode($paramsDto->getCertificate() ?? data_get($model,'certificate')),
            'other_information'       => json_encode($paramsDto->getOtherInformation() ?? data_get($model,'other_information')),
        ]);
    }

    private function uploadPhoto(Resume $model,UploadedFile $photo,int $phone) : void
    {
        try {
            Storage::deleteDirectory('resume_avatars');
            $path = sprintf("resume_avatars/%s",md5($phone));
            $path = $photo->store($path);
            $model->setAttribute('photo',json_encode([
                'real_path' => $path,
                'cut_size' => '400*400',
                'cut_real_path' => '',
                'size' => $photo->getSize()
             ]));
        }catch (\Exception $exception){
            dd($exception);
        }

    }
}