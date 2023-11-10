<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shipping extends Controller
{
     public function data_send()
     {
         return view('send_data');
     }

     public function senddata(Request $request)
     {

     $shipping_address = new shipping_address();

      $india_post = $request->input('india_post');
      $fedex = $request->input('fedex');
      $blue_dart = $request->input('blue_dart');
    
  
       $isInsertSuccress = shipping_address::insert(['india_post'=>$india_post,
           'fedex'=>$fedex,
            'blue_dart'=>$blue_dart,                        
      ]);

      if($isInsertSuccress){
          echo "<h1> Data Send Successfully! </h1>";
      }
      else{
          echo "<h1> Data Not Send! </h1>";
      }  
    }

    public function send()
    {
        return 'success';
    }
}
