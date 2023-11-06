<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Usercontroller extends Controller
{
    //
   public function index(){
        return view ('index');
    }

    public function details(Request $request){
   
            $username = $request->input('username');
            $email = $request->input('email');
            $password = $request->input('password');
            $phone = $request->input('phone');
            $gender = $request->input('gender');
            $language = $request->input('language');
            $zipc = $request->input('zipc');
            $about = $request->input('about');
            
            //insert operation
    
            DB::insert("insert into shaform(username, email,password,phone,gender,language,zipc,about) values(?,?,?,?,?,?,?,?)" ,
            [$username,$email,$password,$phone,$gender,$language,$zipc,$about]);
            return 'Record inserted! <a href="/">Click, here</a>';
    
    }
    public function user(){
        $ud = DB::select("select*from shaform");
        return view('user',['ud'=>$ud]);
         
    }

    
}
