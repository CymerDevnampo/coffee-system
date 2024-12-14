<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'cart';

    protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(CartItems::class,'cart_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
