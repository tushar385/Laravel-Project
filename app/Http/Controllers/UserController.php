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
        //return user::all();
        //return view('demo');


        $data= user::all();
        return view('fetch',['data'=>$data]);


        //return DB::select("select * from users");
       // $user= user::all()->toArray();
        //return view('demo',compact('user'));
    }

    
    /* function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'email'=>'required',
            'password'=>'required', 
            'phone' => 'required|min:11|numeric',
            'drop1'=> 'required',
            'country' =>'required|not_in:0',
            'country'=>'required|min:1',
            'checkbox'=>'required',
            'flamingo'=>'required |array |min:1',
            'gender'=> 'required|in:male,female,other'
        
        ]);
        return $req->input();
    } */



    /* function getData(Request $req)
    {
        return user::all();
    } */


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
