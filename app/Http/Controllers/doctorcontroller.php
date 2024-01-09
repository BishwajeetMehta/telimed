<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\specification;

class doctorcontroller extends Controller
{
    public function index()
    {
        $data['specifications'] = specification::where('status',1)->get();
        return view('backend.dashboard.layouts.doctordetails.addDoctor', $data);
    }

    public function create(Request $request){

        $image = '';
        if($request->has('image') && $request->file('image')){
            $file  = $request->file('image');
            $newName = time().'-'. rand(10,9999999999999).'-'.$file->getClientOriginalName();
            $newPath = public_path().'/doctors'.'/';
            $file->move($newPath, $newName);
            $image = asset('/doctors').'/'.$newName;

            }

        $data=[
            'specification_id'=>$request->specification,
           'name'=>$request->name,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'image'=>$image,
           'fee'=>$request->fee,
           'status'=>$request->status,
           'description'=>$request->description,
          
       ];

        doctor::insert($data);
        return redirect()->route('doctor.display');
    }
        





    public function disp()
    {
        $data['doctor'] = doctor::all();
        return view('backend.dashboard.layouts.doctordetails.displaydoctor', $data);
    }

    public function edit($id){
        if(!$id){
          return rediect()->back();
    }
    $data['doctor']=doctor::find($id);
    if($data){
        return view ('backend.dashboard.layouts.doctordetails.editdoctor',$data);
    }
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

    public function doctorList($specification){
        if(!$specification){
            //flash message something went wrong
            return redirect()->back();
        }

        $doctors = doctor::whereHas(['specification' => function($query){
                $query->where('specication_id',$specification);
    }])->get();
    dd($doctors);
    }

}
