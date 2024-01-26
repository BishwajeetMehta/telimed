<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function disp()
    {
        $data['users'] = User::latest()->paginate(15);
        return view('backend.dashboard.layouts.user.manageuser', $data);
    }

    public function delete($id){

        if(!$id){
            return rediect()->back();
        }
        $data=User::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->back();

    }


    public function usersignup(Request $request){
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'password' =>'required|min:6',
            'mobile' => 'required',
            'address' => 'required',
        
        ]);

        $image_url = '';
        if($request->has('image') && $request->file('image')){
            $file  = $request->file('image');
            $name  = time().'-'. rand(10,9999999999999).'-'.$file->getClientOriginalName();
            $path = public_path().'/users'.'/';
            $file->move($path,$name);
            $image_url = asset('/users').'/'.$name;
        }

        $data=[
            'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
           'image'=>$image_url,
           'age'=>$request->age,
           'address'=>$request->address,
          

        ];

        User::insert($data);
        return redirect()->back();
    }

    public function userdetails($id)
            {
            if($id){

            $data['appointments']= user::with('appointments')->where('id', $id)->get();
            return view('frontend.userdetails',$data);
            }
            return redirect()->back();
            }

            
}
