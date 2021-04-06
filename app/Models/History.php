<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['users_id','products_id','products_name','products_price','amount','total','discount','parameter'];
}
