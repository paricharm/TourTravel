<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable = ['name','unique_id','image','img1','img2','img3','img4','img5','type','short_desc','status'];
    protected $table = "places";
    
    public function hotels()
    {
        return $this->hasMany(Hotels::class, 'place_id', 'unique_id');
    }
   
}
