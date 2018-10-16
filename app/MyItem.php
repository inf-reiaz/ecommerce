<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyItem extends Model
{
    protected $table = 'myitems';
    
    protected $fillable = ['id','row_id','product_id','product_name','product_img','product_price','product_qty','is_family','session','total_price','created_at','updated_at'];
    
   
}
