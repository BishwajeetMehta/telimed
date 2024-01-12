<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\doctor;
use App\specification;
use App\User;
class Appointment extends Model
{
    protected $guarded = ['id'];

     public  function specification()
     {
         return $this->hasOne(specification::class,'id','specification_id');
      
     }
     public  function doctor()
     {
        
         return $this->hasOne(doctor::class,'id','doctor_id');
       
     }
     public  function user()
     {
       
         return $this->hasOne(User::class,'id','user_id');
         
     }
}
