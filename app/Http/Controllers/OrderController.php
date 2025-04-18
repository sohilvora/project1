<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class OrderController extends Controller
{
    public function myOrder()
    {
        $userId = session('user_id');
        $orders = Checkout::with(['product', 'user'])
            ->where('user_id', $userId)
            ->get();
        if ($orders->isEmpty()) {
            return redirect(route('home'))->with('error', 'No orders found');
        } else {
        
            return view('myorder', ['orders' => $orders]);

        }
    }
}
