<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    

    protected $table = "subscribers";

    protected $fillable = [
        'email',
        'created_by',
        'updated_by'
    ];
    
    
}
