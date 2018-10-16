<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCart extends Model
{
    protected $table = 'carts';
    
    protected $fillable = ['id','user_id','product_id','product_name','price','quantity','total_price','order_id','is_family'];
    
   
}
