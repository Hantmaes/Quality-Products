<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Omnipay\Omnipay;
use App\Beer;
use App\Payment;


class PaymentController extends Controller
{

    public function index()
    {
        return view('payments');
    }

    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));
          
            $token = $request->input('stripeToken');
          
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
          
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();
                 
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
          
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
                return "Payment is successful. Your payment id is: ". $arr_payment_data['id'];
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }



    public function store( Request $request){
        $stripe = Stripe::make('sk_test_51H2ezHBruCHLHVD7FfXUMom8aB8YxJMQ24q7HtPNyytQIsnVnY9FF1Mzaqt6obPWJZM0NlF0dGO4Gsevd5UzmtX7009JWVAa8r', '2020-03-02'); // used Stripe secret key, not Publishable key
 
        $charge = $stripe->charges()->create([
            'amount' => $_POST["amount"], // *100
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