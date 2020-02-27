<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('index', [

            'stocks' =>Stock::get()


        ]);

    }
}
