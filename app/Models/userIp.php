<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userIp extends Model
{
    use HasFactory;
    //table user_ip
    protected $table = "user_ip";
    protected $fillable = ["ip", "gender", "age", "location"];
}
