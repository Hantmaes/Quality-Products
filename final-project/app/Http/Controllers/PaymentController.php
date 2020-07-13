<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;


class PaymentController extends Controller
{
    public function store(Request $request){
        $stripe = Stripe::make('sk_test_51H2ezHBruCHLHVD7FfXUMom8aB8YxJMQ24q7HtPNyytQIsnVnY9FF1Mzaqt6obPWJZM0NlF0dGO4Gsevd5UzmtX7009JWVAa8r', '2020-03-02'); // used Stripe secret key, not Publishable key
        $charge = $stripe->charges()->create([
            'amount'   => 200,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'receipt_email' => "admin@email.com",
        ]);

        

        // return "Payment Created";

        return redirect('/');

        // return response([
        //     'success_url'=> redirect()->intended('/')->getTargetUrl(),
        //     'message'=>'success'
        // ]);
    }  
    
 

    public function confirm(Request $request)
    {   
        //dd($request);
        
        return view('payments.payment', compact('request'));
    }


}