<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(Request $req)
    {
        $valid = $req->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_detail' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($valid) {
            // Save product to database
            $product = new Product();
            $product->p_name = $req->product_name;
            $product->p_price = $req->product_price;
            $product->p_detail = $req->product_detail;
            $product->p_category = $req->product_category;

            // Handle file upload
            if ($req->product_image) {
                $file = $req->file('product_image');
                $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs("public", $filename);
                $product->p_image = $filename;
                $product->save();
            }

            if ($product->save()) {
                return redirect('/product')->with('success', 'Product added successfully');
            } else {
                return redirect('/add_product')->with('error', 'Failed to add product');
            }
        } else {
            return view('add_product', [
                'product_name' => $req->product_name,
                'product_price' => $req->product_price,
                'product_detail' => $req->product_detail,
                'product_category' => $req->product_category
            ]);
        }
    }

    public function deleteProduct($p_id)
    {
        $product = Product::where('p_id', $p_id)->first();
        
        $product->delete();
        return redirect('/product')->with('success', 'Product deleted successfully');
    }

}
