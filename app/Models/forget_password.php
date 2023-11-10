<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forget_password extends Model
{
    use HasFactory;

   protected $table = "password_recovery";
   protected $primaryKey = "customer_id";
}
