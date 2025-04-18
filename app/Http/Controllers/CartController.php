<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        
        $userId = session('user_id');
        $cartItems = Cart::with(['product', 'user'])
                 ->where('user_id', $userId)
                 ->get();
        if($cartItems->isEmpty()) {
            return redirect(route('home'))->with('error', 'No items in cart');
        }
        else
        return view ('cart', ['cartitems' => $cartItems]);
    }
    public function addToCart(Request $req)
    {
        $id = $req->id;
        $cart = new Cart();
        $cart->qty = $req->qty;
        $cart->p_id = $req->p_id;
        $cart->user_id = session('user_id');
        $cart->save();
        if ($cart->save()) {
            return redirect(route('cart'))->with('success', 'Product added to cart successfully');
        } else {
            return redirect(route('product_detail'))->with('error', 'Failed to add product to cart');
        }
    }
    public function removeFromCart($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            return redirect(route('cart'))->with('success', 'Product removed from cart successfully');
        } else {
            return redirect(route('cart'))->with('error', 'Failed to remove product from cart');
        }
    }
}
