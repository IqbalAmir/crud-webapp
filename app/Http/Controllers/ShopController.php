<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index', ['products' => Product::latest()->get()]);
    }



}
