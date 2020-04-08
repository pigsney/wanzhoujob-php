<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class JobFairCompanyMap extends Model
{
    protected $table = 'job_fair_company_maps';

    public function job_fair()
    {
        return $this->belongsTo(JobFair::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}