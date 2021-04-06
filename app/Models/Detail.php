<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['products_id','products_name','products_price','amount','total','users_id'];
}
