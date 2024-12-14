<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $table = 'cart_items';

    protected $fillable = ['cart_id', 'product_id', 'quantity', 'price'];

    public function cart()
    {
        return $this->belongsTo(Carts::class, 'cart_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
