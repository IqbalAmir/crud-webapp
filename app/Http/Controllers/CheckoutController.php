<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('shop.checkout');
    }

    public function store(Request $request)
    {
        try {

            \Stripe::charges()->create([
                'amount' => \Cart::getSubTotal() / 100,
                'currency' => 'GBP',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                ],
            ]);
            return back()->with('success_message', 'Thank you! Your payment has been accepted');
        } catch (CardErrorException  $error) {
            return back()->withErrors('Error ' . $error->getMessage());
        }
    }
}
