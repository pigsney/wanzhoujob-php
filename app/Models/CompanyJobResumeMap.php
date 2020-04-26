<?php


namespace App\Models;


use App\Kernels\BaseModel;

class CompanyJobResumeMap extends BaseModel
{
    //当你看到这样的名字的时候请不要质疑
    //我查看了万州人才网的app 需要先看到岗位 企业是岗位的所属级只是用来记录而已 而且company_job_maps这张表已经记录了唯一的id
    //一个简历可以投多个岗位
    protected $table = 'job_resume_maps';

    protected $fillable = ['company_id','job_id','resume_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}