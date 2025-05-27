<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Exceptions\IncompletePayment;

class SubscriptionController extends Controller
{
    /**
     * Show the subscription page.
     */
    public function show()
    {
        return view('subscribe');
    }

    /**
     * Handle the subscription request.
     */
    public function store(Request $request)
    {
        $user = $request->user();
        
        return $user->newSubscription('default', 'price_1RTIkAERbBmB4dISmQOoyUYB')
            ->checkout([
                'success_url' => route('dashboard'),
                'cancel_url' => route('subscribe'),
            ]);
    }
}