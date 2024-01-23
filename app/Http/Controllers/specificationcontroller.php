<?php

namespace App\Http\Controllers;

use App\doctor;
use Illuminate\Http\Request;
use App\specification;
use function foo\func;

class specificationcontroller extends Controller
{
    public function disp()
    {
        $data['specifications'] = specification::latest()->paginate(15);
        return view('backend.dashboard.layouts.doctordetails.specification.index', $data);
    }

    public function create(Request $request){
        $data=[
            'specification'=>$request->specification,
           'status'=>$request->status,
        ];

        specification::insert($data);
        return redirect()->route('specification.display');
    }

    public function edit($id){
        if(!$id){
          return rediect()->back();
    }
    $data['specifications']=specification::find($id);
    if($data){
        return view ('backend.dashboard.layouts.doctordetails.specification.edit',$data);
    }
    return redirect()->back();
    
    }

    public function update(Request $request,$id){
        if(!$id){
            return rediect()->back();
    }
    $record=specification::find($id);
    if($record){
        $data=[
            'specification'=>$request->specification,
           'status'=>$request->status,
        ];

      $record->update($data);
        return redirect()->route('specification.display');
    
    }
    return redirect()->back();
    
    }


    public function delete($id){

        if(!$id){
            return rediect()->back();
        }
        $data=specification::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }

    public  function getDoctorList( Request $request)
    {

        if(!$request->id){
            //add flash message here siir
            return redirect()->back();
        }
        $doctors = doctor::whereHas('specifications', function($q) use ($request){
            $q->where('id',$request->id);
        })->get();

        $html = '';
        if($doctors){
            foreach ($doctors as $doctor){
                $html.= '<option value="'.$doctor->id.'">'.$doctor->name.'</option>';
            }
            return  response()->json(['doctors' => $html]);
        }
        return  response()->json(['doctors' => '<option>No doctor Found</option>']);

    }
}
