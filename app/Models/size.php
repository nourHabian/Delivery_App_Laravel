<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class,'products_sizes');
    }
}
