<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function division(){
    	return $this->belongsTo(Division::class,'division_id','id');
    }
}
