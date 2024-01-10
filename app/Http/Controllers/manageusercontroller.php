<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class manageusercontroller extends Controller
{
    public function disp()
    {
        $data['users'] = User::all();
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
   
}
