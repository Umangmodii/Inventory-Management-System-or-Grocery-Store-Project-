<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\check_address;
use App\Http\Controllers\checkoutaddressController;
use checkoutaddress;

class checkoutaddressController extends Controller
{
     public function check()
     {
           return view('check_address');
     }

    public function checkoutaddress(Request $request)
     {
       //  echo "<pre>";

       //  print_r($request->all());

       //  echo "</pre>";

       //  $checkout_address  = new Checkout_address;

        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $state = $request->input('state');
        $city = $request->input('city');

       //  $checkoutaddress = new checkoutaddress;

       $isInsertSuccress = checkoutaddress::insert(['name'=>$name,
        'phone'=>$phone,
        'address'=>$address,
        'state'=>$state,
        'city'=>$city,
       ]);
       

       // if($isInsertSuccress)
       // {
       //        echo "Register Successfully!";
       // }
       
       // else
       // {
       //        echo "OOPS! User Not Registerd.";
       // }
     }
}
