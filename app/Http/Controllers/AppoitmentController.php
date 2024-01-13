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
           'specification_id' => $request->specification,
            'user_id' => $request->userid,
            'doctor_id' => $request->doctor_id,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message
        ];

        Appointment::insert($data);
        return rediect()->back();
       //send appointment confirmation mail
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
