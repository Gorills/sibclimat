<?php

namespace App\Http\Controllers;

use App\Event;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('index', [

            'stocks' =>Stock::all(),
            'events' =>Event::all(),
            'works' =>Work::orderBy('created_at', 'desc')->paginate(3)


        ]);

    }
}
