<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Mail\AppointmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppoitmentController extends Controller
{
    public  function storeAppointments( Request  $request)
    {
        $request->validate([
            'date' => 'required',
            'time' =>'required',
            'message' =>'required',
                    
        ]);
        //add validations
        $data = [
           'specification_id' => $request->specification,
            'user_id' => $request->userid,
            'doctor_id' => $request->doctor_id,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message
        ];

        Appointment::insert($data);
       Mail::to(auth()->user()->email)->send(new AppointmentMail('Pending'));
        //redirect from here
    }


    public function disp()
    {
        $data['appointments'] = Appointment::with('specification','doctor','user')->get();
        return view('backend.dashboard.layouts.user.manageappointment', $data);
    }
    public function edit($id){
        if(!$id){
          return rediect()->back();
    }
    $data['appointments']=Appointment::find($id);
    if($data){
        return view ('backend.dashboard.layouts.user.editappointment',$data);
    }
    return redirect()->back();
    
    }
    public function update(Request $request,$id){
        if(!$id){
            return rediect()->back();
    }
    $record=Appointment::find($id);
    if($record){
        $data=[
            
           'status'=>$request->status,
        ];

      $record->update($data);
        Mail::to(auth()->user()->email)->send(new AppointmentMail($request->status));
        return redirect()->route('appointment.display');
    
    }
    return redirect()->back();
    
    }

    
public function delete($id){

    if(!$id){
        return rediect()->back();
    }
    $data=Appointment::find($id);
    if($data){
        $data->delete();
    }
    return redirect()->back();


}
}
