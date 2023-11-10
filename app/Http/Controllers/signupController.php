<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    public function user()
    {
        return view('signup-message');  
    }

      public function senddata(Request $request)
      {
     
         
    //   Insert Query 

    $signup = new Signup();

    // $signup->firstname = $request->firstname;
    // $signup->lastname = $request->lastname;
    // $signup->email = $request->email;
    // $signup->password = Hash::make($request->password);

       $firstname = $request->input('firstname');
       $lastname = $request->input('lastname');
       $email = $request->input('email');
       $password = $request->input('password');
     
    //    return back()->with('success', 'Register Successfully!');
    
        $isInsertSuccress = signup::insert(['firstname'=>$firstname,
       'lastname'=>$lastname,
       'email'=>$email,
        'password'=>$password,
       ]);

    //    if($isInsertSuccress)
    //    {
    //         return redirect('signup-message');
    //    }

    //    else
    //    {
    //        return back()->with('error','Wrong Details');
    //    }

       if($isInsertSuccress){
           echo "<h1> Data Send Successfully! </h1>";
       }
       else{
           echo "<h1> Data Not Send! </h1>";
       }  
     }

     public function send(){
         return 'success';
     }
}

function login(){
    return view('signin');
}

