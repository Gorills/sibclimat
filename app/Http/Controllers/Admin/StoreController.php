<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store() {

        return view('admin.store', [

            'categories' =>Category::paginate(5),
            'products' =>Product::paginate(5)

        ]);

    }
}
