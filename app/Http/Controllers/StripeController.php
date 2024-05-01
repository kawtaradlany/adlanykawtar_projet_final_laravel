<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class StripeController extends Controller
{
    //
    public function session(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $session = StripeSession::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => "your plat",
                            "description" => "bsaha o raha"
                        ],
                        'unit_amount'  => 6900,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment', // the mode of payment
            'success_url' => route('success'), // route when success 
            'cancel_url'  => route('menu'), // route when failed or canceled
        ]);

        return redirect()->away($session->url);
    }
    
}
