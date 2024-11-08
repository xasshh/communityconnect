<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;

class PayPalController extends Controller
{
    public function payWithPaypal(Request $request)
    {
        $product = [
            'items' => [
                [
                    'name' => 'Product Name',
                    'price' => 100.00,
                    'currency' => 'USD',
                    'quantity' => 1
                ]
            ],
            'invoice_id' => uniqid(),
            'return_url' => route('payment_success'),
            'cancel_url' => route('payment_cancel'),
            'total' => 100.00
        ];

        $response = PayPal::setExpressCheckout($product);

        return redirect($response['paypal_link']);
    }

    public function handlePayment(Request $request)
    {
        $token = $request->input('token');

        $payerInfo = PayPal::getPayerInfo($token);

        $amount = 100.00; // Amount to charge

        $transaction = PayPal::createTransaction([
            'amount' => [
                'value' => $amount,
                'currency' => 'USD'
            ],
            'description' => 'Test Transaction',
            'payer_id' => $payerInfo['PAYERID']
        ]);

        $response = PayPal::execute($transaction);

        if ($response['ACK'] === 'SUCCESS') {
            // Payment successful
            return redirect()->route('payment_success');
        } else {
            // Payment failed
            return redirect()->route('payment_cancel');
        }
    }

    public function paymentSuccess()
    {
        return view('payment-success');
    }

    public function paymentCancel()
    {
        return view('payment-cancel');
    }
}
