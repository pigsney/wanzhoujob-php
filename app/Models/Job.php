<?php

namespace App\Models;

use App\Enums\Education;
use App\Enums\Sex;
use App\Enums\WorkExperience;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $primaryKey = "id";

    protected $fillable = ["job_title","salary_above","salary_below","department","number","education",
        "work_experience","requirements","sex","min_age","max_age","manage_id"
    ];

    protected $appends = [
        'salary_range','age_range','sex_name',"education_name","work_experience_name"
    ];
    public function getSexNameAttribute():string
    {
        return Sex::labMaps()[$this->getAttribute('sex')];
    }

    public function getEducationNameAttribute():string
    {
        return Education::labMaps()[$this->getAttribute('education')];
    }

    public function getWorkExperienceNameAttribute():string
    {
        return WorkExperience::labMaps()[$this->getAttribute('work_experience')];
    }

    public function getSalaryRangeAttribute():string
    {
        $minSalary = $this->getAttribute('salary_above');
        $maxSalary = $this->getAttribute('salary_below');

        return $minSalary == 0 && $maxSalary == 0 ? "面议" : sprintf('%s-%s元',$minSalary,$maxSalary);
    }

    public function getAgeRangeAttribute() : string
    {
        $minAge = $this->getAttribute('min_age');
        $maxAge = $this->getAttribute('max_age');

        return $minAge == 0 && $maxAge == 0 ? "不限" : sprintf('%s-%s岁',$minAge,$maxAge);
    }

    public function company(){
        return $this->belongsToMany(Company::class,'company_job_maps');
    }
}
