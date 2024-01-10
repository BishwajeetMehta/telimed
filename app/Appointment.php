<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = ['id'];

     public  function specification()
     {
         return $this->hasOne(specification::class,'id','specification_id');
     }
}
