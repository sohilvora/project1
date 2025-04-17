<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index($id = '')
    {
        $categories = Category::all();
        if ($id == '') {
            $products = Product::all();
        } else {
            $products = Product::where('p_c_id', $id)->get();
        }
        return view('index', compact('categories', 'products'));
    }
    public function searchProduct(Request $req)
    {
        $categories = Category::all();
        $search = $req->search;
        $products = Product::where('p_name', 'LIKE', "%$search%")
            ->orwhere('p_price', 'LIKE', "%$search%")
            ->orwhere('p_detail', 'LIKE', "%$search%")
            ->get();
        return view('index', compact('categories', 'products', 'search'));
    }
    public function productDetail($p_id)
    {
        $product = Product::where('p_id', $p_id)->first();
        return view('product_detail', ['product' => $product]);
    }
}
