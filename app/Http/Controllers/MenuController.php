<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getAllMenu()
    {
        $menu = Products::all();
        return response()->json($menu);
    }
}
