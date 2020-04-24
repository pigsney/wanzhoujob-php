<?php


namespace App\Models;


use App\Enums\Education;
use App\Enums\EducationalType;
use App\Enums\JobStatus;
use App\Enums\MaritalStatus;
use App\Enums\WorkExperience;
use App\Kernels\BaseModel;

class Resume extends BaseModel
{
    protected $table = 'resume';

    protected $fillable = [
        'name','sex','high','introduce','birthday','phone','work_experience','educational_level','political_outlook',
        'marital_status','native_place','address','email','job_status','photo','job_intention','work_history',
        'educational_type','educational_background','project_history','language_ability','skill_expertise','certificate',
        'other_information'
    ];

    protected $appends = [
        'work_experience_name','educational_level_name','marital_status_name','job_status_name','educational_type_name'
    ];

    public function getWorkExperienceNameAttribute():string
    {
        return WorkExperience::labMaps()[$this->getAttribute('work_experience')];
    }

    public function getEducationalLevelNameAttribute($nature):string
    {
        return Education::labMaps()[$this->getAttribute('educational_level')];
    }
    public function getMaritalStatusNameAttribute($nature):string
    {
        return MaritalStatus::labMaps()[$this->getAttribute('marital_status')];
    }
    public function getJobStatusNameAttribute($nature):string
    {
        return JobStatus::labMaps()[$this->getAttribute('job_status')];
    }
    public function getEducationalTypeNameAttribute($nature):string
    {
        return EducationalType::labMaps()[$this->getAttribute('educational_type')];
    }


}