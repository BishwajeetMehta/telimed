<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppoitmentController extends Controller
{
    public  function storeAppointments( Request  $request)
    {
        
        //add validations
        $data = [
           'specification_id' => $request->specification_id,
            'user_id' => $request->user_id,
            'doctor_is' => $request->doctor_is,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message
        ];

        Appointment::insert($data);
       //send appointment confirmation mail
        //redirect from here
    }
}
