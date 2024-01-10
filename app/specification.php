<?php

namespace App;
use App\doctor;
use Illuminate\Database\Eloquent\Model;

class specification extends Model
{


    protected $guarded=['id'];

    public function doctor(){
        return $this->hasMany(doctor::class,'specification_id','id');

    }
}