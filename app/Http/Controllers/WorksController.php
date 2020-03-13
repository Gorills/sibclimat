<?php

namespace App\Http\Controllers;

use App\Category;
use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index() {

        return view('works', [


            'works' =>Work::orderBy('created_at', 'desc')->paginate(6),

            'footers' => Category::with('children')->where('parent_id', 0)->get()

        ]);

    }
    public function contacts() {

        return view('contacts', [


            'footers' => Category::with('children')->where('parent_id', 0)->get()

        ]);

    }
}
