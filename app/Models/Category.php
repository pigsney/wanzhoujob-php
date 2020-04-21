<?php

namespace App\Models;



class Category extends BaseModel
{
    protected $table = "category";

    protected $fillable = ['name'];

    protected $primaryKey = "id";

    public function company(){
        return $this->belongsToMany(Company::class,'company_category_maps');
    }
}
