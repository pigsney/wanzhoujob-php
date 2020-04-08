<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable = ['name'];

    protected $primaryKey = "id";

    public function company(){
        return $this->belongsToMany(Company::class,'company_category_maps');
    }
}
