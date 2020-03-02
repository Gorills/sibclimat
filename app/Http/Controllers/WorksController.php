<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index() {

        return view('works', [


            'works' =>Work::orderBy('created_at', 'desc')->get()


        ]);

    }
}
