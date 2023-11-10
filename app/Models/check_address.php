<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_address extends Model
{
    use HasFactory;

   public $table="checkoutaddress";
   public $primaryKey = "customer_id"; 
}
