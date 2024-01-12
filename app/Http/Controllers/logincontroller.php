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
                        if($user->role =='admin'){
                            return redirect()->route('userdashboard');
                            }
                         else if ($user->role =='user'){
                             return redirect()->route('userdashboard');
                            }
                    else{
                           return redirect()->back()->with('error', 'Check Email , Password!');
                            }
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
}

