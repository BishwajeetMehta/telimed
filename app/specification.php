<?php

namespace App;
use App\doctor;
use Illuminate\Database\Eloquent\Model;

class specification extends Model
{
 public function doctor(){
 return $this->hasMany(doctor::class,'specification_id','id');

 }

    protected $guarded=['id'];
}