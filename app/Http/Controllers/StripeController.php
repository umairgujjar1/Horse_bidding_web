<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function stripe()
    {

        return view('User.stripe');
    }

    public function stripePost(Request $request,$id)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100*100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This is test payment",
        ]);

        Session::flash('success', 'Payment Successful !');

        return back();
    }
}

