<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyCategoryMap extends Model
{
    use SoftDeletes;
    protected $table ='company_category_maps';
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}