<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
      public function login(Request $request){
       
            $request->validate([
                'email' =>'required|email',
                'password' =>'required|min:6'
            ]);
    
            //find user
            $user = User::where('email',$request->email)->first();
            if($user){
                if($user->password){
                    if(Hash::check($request->password, $user->password)){
                        
                        Auth::login($user);
                        return redirect()->route('dashboard');
                    }
                    $request->session()->flash('error', 'Please check Password');
                    return redirect()->back();
                } 
            }
            $request->session()->flash('error', 'User Not found');
            return redirect()->back();
        }



        public function logout(){
            if(Auth::check()){
                Auth::logout();
                return redirect()->route('admin.login.submitform');
            }
            return redirect()->back();
    
    }

    public function signup (Request $request){
        
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password'=>'required|min:6',
            
        // ]);

        $image = '';
        if($request->has('image') && $request->file('image')){
            $file  = $request->file('image');
            $newName = time().'-'. rand(10,9999999999999).'-'.$file->getClientOriginalName();
            $newPath = public_path().'/users'.'/';
            $file->move($newPath, $newName);
            $image = asset('/users').'/'.$newName;

            }
       
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password), 
            'mobile'=>$request->mobile,
           'image'=>$image,
            'age'=>$request->age,
            'address'=>$request->address,
        ];
        User::insert($data);
        return redirect()->back();
       }




}

