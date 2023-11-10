<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payment extends Controller
{
    public function data_send()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  

    public function check_payment(Request $request)  
    {
        $card_owner = $request->input('card_owner');
        $card_number = $request->input('card_number');
        $expire_date =$request->input('expire_date');
        $cvv = $request->input('cvv');
        // $cash_on_delivery = $request->input('cash_on_delivery');

        
        $isInsertSuccress = payment::insert(['card_owner'=>$card_owner,
       'card_number'=>$card_number,
       'expire_date'=>$expire_date,
        'cvv'=>$cvv,
        
       ]);

       if($isInsertSuccress)
       {
             echo "Paymnt is Success!";
       }

       else
       {
            echo "Payment is Unsuccessfully!";
       }   
    }
}
