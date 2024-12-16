<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(size::class,'products_sizes');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
