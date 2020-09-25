<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\user;
use Crypt;
use DB;

class UserController extends Controller
{
    public function fetch()
    {
       
        $data= user::all();
        return view('fetch',['data'=>$data]);
    }


    function getData(Request $req)
    {
        $req->validate([
                'date'  =>  'required',
                'username' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'phone'=>'required|min:10|numeric',
                'country'=>'required|min:1',
                'state'=>'required|min:1',
                'gender'=>'required',
                'Identification'=>'required',
                'Language'=>'required',
                
            ]);


        $user =new user;
        $user->date=$req->date;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=Crypt::encrypt($req->input('passowrd'));
        $user->phone=$req->phone;
        $user->country=$req->country;
        $user->state=$req->state;
        $user->gender=$req->gender;
        $user->Identification =implode(",",$req->Identification);
        $user->Language =implode(",",$req->Language);
        

        $user->save();
        
        
    }
}
