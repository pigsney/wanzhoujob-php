<?php

namespace App\Models;

use App\Enums\CompanyNature;
use App\Enums\CompanyScale;
use App\Kernels\BaseModel;

class Company extends BaseModel
{
    protected $table = "company";

    protected $fillable = ["url","name","logo","full_name","nature","scale","email","welfare","address",
            "standby_address","phone","landline","introduce","contacts"
        ];

    protected $primaryKey = "id";

    public function jobs(){
        return $this->belongsToMany(Job::class,'company_job_maps','company_id','job_id');
    }

    public function job_fair(){
        return $this->belongsToMany(JobFair::class,'job_fair_company_maps');
    }

    public function types(){
        return $this->belongsToMany(Category::class,'company_category_maps');
    }

    protected $appends = [
        'scale_name','nature_name'
    ];

    public function getScaleNameAttribute():string
    {
        return CompanyScale::labMaps()[$this->getAttribute('scale')];
    }

    public function getNatureNameAttribute($nature):string
    {
        return CompanyNature::labMaps()[$this->getAttribute('nature')];
    }


}
