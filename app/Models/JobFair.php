<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobFair extends Model
{
    protected $table = 'job_fair';

    protected $fillable = ['holding_time','title','host_unit','introduce','venue','telephone','image','status'];

    public function company()
    {
       return $this->belongsToMany(Company::class,'job_fair_company_maps','job_fair_id','company_id')->orderByDesc('created_at');
    }

    public function jobFairTypes(){
        return $this->belongsToMany(Category::class,'job_fair_type_maps','job_fair_id','type_id');
    }
}
