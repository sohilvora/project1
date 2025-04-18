<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $userId = session('user_id');
        $cartItems = Cart::with(['product', 'user'])
            ->where('user_id', $userId)
            ->get();
        return view('checkout', ['cartitems' => $cartItems]);
    }
    public function checkOut(Request $req)
    {
        $userId = session('user_id');
        $cartItems = Cart::with(['product', 'user'])
            ->where('user_id', $userId)
            ->get();

        $order_id = rand(1000, 9999);
        foreach ($cartItems as $item) {
            $checkout = new Checkout();
            $checkout->order_id = $order_id;
            $checkout->p_id = $item->product->p_id;
            $checkout->user_id = $userId;
            $checkout->name = $req->name;
            $checkout->email = $req->email;
            $checkout->mobile = $req->mobile;
            $checkout->street_no = $req->street_no;
            $checkout->house_no = $req->house_no;
            $checkout->landmark = $req->landmark;
            $checkout->save();

            Cart::find($item->id)->delete();
        }
        return redirect(route('my_order'));
    }
}
