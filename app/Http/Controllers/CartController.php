<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('shop.cart');
    }

    public function store(Request $request)
    {
        \Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Models\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart');
    }

    public function destroy($id)
    {
        \Cart::remove($id);

        return back()->with('success_message', 'Item removed');
    }
}
