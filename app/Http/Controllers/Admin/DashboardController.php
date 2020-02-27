<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard
    public function dashboard() {

        return view('admin.dashboard', [

            'stocks' =>Stock::paginate(5)


        ]);

    }
}
