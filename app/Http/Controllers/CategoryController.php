<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $req)
    {
        $valid = $req->validate([
            'category_name' => 'required',

        ]);
        if ($valid) {
            $category = new Category();
            $category->c_name = $req->category_name;
            $category->save();

            if ($category->save()) {
                return redirect('/category')->with('success', 'Category added successfully');
            } else {
                return redirect('/add_category')->with('error', 'Failed to add category');
            }
        } else {
            return view('add_catagory', [
                'category_name' => $req->category_name
            ]);
        }
    }
    public function deleteCategory($c_id)
    {
        $category = Category::where('c_id', $c_id)->first();
        
        $category->delete();
        return redirect('/category')->with('success', 'Category deleted successfully');
    }
}


