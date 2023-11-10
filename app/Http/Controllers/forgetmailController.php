<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\forgetmailController;
use Mail;
use App\Mail\SendEmailUsingGmail;

class forgetmailController extends Controller
{
   public function create()
   {
       return view('mail-send');
   }

   public function sendEmail()
   {
      $data = [
      'name'=>'Hello Umang!',
      'body'=>'Click Below link to Reset Password',
      ];

      Mail::to('umangmodi003@gmail.com')->send(new SendEmailUsingGmail($data));
       
      dd('User has been Email Send Successfully!');
   }

    function validateform(Request $request)
   {
     print_r($request->all());
     $this->validate($request,[
        'email'=>'required'
     ]);
   }
}

