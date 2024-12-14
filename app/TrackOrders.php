<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackOrders extends Model
{
    protected $table = 'track_orders';

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
