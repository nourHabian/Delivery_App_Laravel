<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_size');
    }

    public function orderes()
    {
        return $this->belongsToMany(Order::class);
    }
}
