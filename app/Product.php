<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = "products";
    
     protected $fillable = [
        'name', 
        'product_photo',
        'description',
        'price',
        'discunt_price',
        'quantity',
        'out_item',
        'family'
    ];
    

     public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
