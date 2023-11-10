<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_login extends Model
{
    use HasFactory;

    public $table = "admin";
    public $primaryKey = "admin_id";
}
