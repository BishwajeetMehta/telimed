<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\specification;
class doctorcontroller extends Controller
{
    public function disp()
    {
        $data['doctors'] = doctor::latest()->paginate(15);
        return view('backend.dashboard.layouts.doctordetails.managedoctor', $data);
    }

    public function spedoc()
    {
        $data['specifications'] = specification::all();
        return view('backend.dashboard.layouts.doctordetails.addDoctor', $data);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'password' =>'required|min:6',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'fee' => 'required',
           
        ]);

        $image_url = '';
        if($request->has('image') && $request->file('image')){
            $file  = $request->file('image');
            $name  = time().'-'. rand(10,9999999999999).'-'.$file->getClientOriginalName();
            $path = public_path().'/doctors'.'/';
            $file->move($path,$name);
            $image_url = asset('/doctors').'/'.$name;
        }

        $data=[
            'specification_id'=>$request->specification_id,
           'name'=>$request->name,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'image'=>$image_url,
           'fee'=>$request->fee,
           'password'=> bcrypt($request->password),
           'status'=>$request->status, 
           'description'=>$request->description, 
           
        ];

        doctor::insert($data);
        return redirect()->back();
    }

public function delete($id){

    if(!$id){
        return rediect()->back();
    }
    $data=doctor::find($id);
    if($data){
        $data->delete();
    }
    return redirect()->back();
}
}




