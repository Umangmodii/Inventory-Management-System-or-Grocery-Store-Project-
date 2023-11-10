<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_login;
use App\Http\Controllers\AdminAuth;

class AdminAuth extends Controller
{
   
    public function login()
    {
          return view('/admin');
    }

    public function submit(Request $request)
    {
     echo "<pre>";
       print_r($request->all());
       
     // Insert Query 

     $email = $request->input('email');
     $password = $request->input('password');

     $isInsertSuccress = admin::insert(['email'=>$email,
                                          'password'=>$password,
    ]);

    if($isInsertSuccress){
        echo "<h1> Data Send Successfully! </h1>";
    }
    else
    {
        echo "<h1> Data Not Send! </h1>";
    }

    }
}


    function adminlogin (Request $request)
    {
        $this->validate($request,[
            '$email'   => 'required|email',
            '$password'   => 'required|alphaNum|min:3'
        ]);

           $admin_data = array(
            '$email'   => $request->get('email'),
            '$password'   => $request->get('password'),
           );

             if(Auth::attempt($admin_data))
             {
                 return redirect('main/successlogin');
             }
             else
             {
                return back()->with('error','Incorrect login Details');
             }

             function successlogin(){
                  return view('admin-dashboard');
             }
    }

           