<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function category($slug) {

        $category = Category::where('slug', $slug)->first();

        return view('category', [

            'category' => $category,
            'categories' => $category->children()->get()

        ]);

    }
}