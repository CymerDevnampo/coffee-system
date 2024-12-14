<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\TrackOrders;
// use Illuminate\Support\Facades\Auth;


class StaticPagesController extends Controller
{
    public function showCart()
    {
        return view('pages.cart');

    }

    public function showTrackOrder()
    {
        return view('pages.track');
    }
}
