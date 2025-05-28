<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Exceptions\IncompletePayment;

class SubscriptionController extends Controller
{
    /**
     * Show the subscription page with details before checkout.
     */
    public function show()
    {
        return view('subscribe');
    }

    /**
     * Handle the subscription request.
     */
    public function checkout(Request $request)
    {
        $user = $request->user();
        
        return $user->newSubscription('patron', 'price_1RTIkAERbBmB4dISmQOoyUYB')
            ->checkout([
                'success_url' => route('profile') . '?subscription=success',
                'cancel_url' => route('profile') . '?subscription=cancelled',
            ]);
    }
}