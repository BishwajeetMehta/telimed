<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\systemsettings;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;
use App\usermail;

class Mailcontroller extends Controller
{
    //mail
  public function usermails(Request $request,$id){

    if(!$id){
      return redirect()->back();
    }
    $appointment = doctor::find($id);
    $data['system'] = systemsettings::find(1);
      $_SESSION['setting'] = $data['system'];

      $Appointment_no = rand(10,9999999999999);
    if($appointment){
     
      $data = [
        'doctor_id' =>  $request->doctorid,
        'user_id' => $request->userid,
        'Appointment_no'=>$Appointment_no
      ];
      dd($data);
     $usermail =  usermail::create($data);
     if($usermail){
      $to = auth()->user()->email;
      Mail::to($to)->send(new usermail($usermail));
     }
    }
  }
}
