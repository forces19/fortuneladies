<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'name', 'price', 'image',
    ];
}
