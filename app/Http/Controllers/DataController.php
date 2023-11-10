<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Http\Controllers\DataController;

class DataController extends Controller
{
    public function index()
    {
          return view('/account-profile');
    }

      public function account(Request $request)
      {
    //    echo "<pre>";
    //      print_r($request->all());
         
       // Insert Query 

       $fname = $request->input('fname');
       $lname = $request->input('lname');
       $address = $request->input('address');
       $country = $request->input('country');
       $state = $request->input('state');
       $email = $request->input('email');
       $contact = $request->input('contact');
       $birthdate = $request->input('birthdate');

    //    $datacontroller = new  DataController;

    //    $datacontroller->fname = $request['fname'];
    //    $datacontroller->lname = $request['lname'];
    //    $datacontroller->address = $request['address'];
    //    $datacontroller->country = $request['country'];
    //    $datacontroller->state = $request['state'];
    //    $datacontroller->email = $request['email'];
    //    $datacontroller->contact = $request['conatct'];
    //    $datacontroller->birthdate = $request['birthdate'];

       $isInsertSuccress = profile::insert(['fname'=>$fname,
       'lname'=>$lname,
       'address'=>$address,
       'country'=>$country,
       'state'=>$state,
       'email'=>$email,
       'contact'=>$contact,
       'birthdate'=>$birthdate,
      ]);

      if($isInsertSuccress){
          echo "<h1> Data Send Successfully! </h1>";
      }
      else{
          echo "<h1> Data Not Send! </h1>";
      }

      }
}
