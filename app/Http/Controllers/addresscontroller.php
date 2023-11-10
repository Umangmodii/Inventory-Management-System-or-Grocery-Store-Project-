<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;
use App\Http\Controllers\addresscontroller;

class addresscontroller extends Controller
{
    public function default()
    {
        // $address = User::all();
        // return view('account-address')->with('address',$address);

        $addresss=addresss::all();  
        return view('account-address',compact('addresss'));  
    }

      public function send(Request $request)
      {
       echo "<pre>";
         print_r($request->all());
         
    //   Insert Query 

       $country = $request->input('country');
       $state = $request->input('state');
       $city = $request->input('city');
       $zipcode = $request->input('zipcode');
       $line1 = $request->input('line1');
       $line2 = $request->input('line2');

       $isInsertSuccress = address::insert(['country'=>$country,
       'state'=>$state,
       'city'=>$city,
       'zipcode'=>$zipcode,
       'line1'=>$line1,
       'line2'=>$line2,
      ]);

      if($isInsertSuccress){
          echo "<h1> Data Send Successfully! </h1>";
      }
      else{
          echo "<h1> Data Not Send! </h1>";
      }  
    }


    // public function send(){
    //     return 'success';
    // }
}
