<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyJobMap extends Model
{
    use SoftDeletes;
    protected $table = 'company_job_maps';

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function Job()
    {
        return $this->belongsTo(Job::class,'job_id','id');
    }
}