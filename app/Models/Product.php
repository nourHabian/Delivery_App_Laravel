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
        return $this->belongsToMany(Size::class,'product_size');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function favoriteByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
