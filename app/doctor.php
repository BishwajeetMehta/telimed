<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
   protected $guarded = ['id'];

   public  function specifications()
   {
       return $this->hasMany(specification::class,'id','specification_id');
   }
}
