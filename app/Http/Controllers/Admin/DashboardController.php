<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard
    public function dashboard() {

        return view('admin.dashboard', [

            'stocks' =>Stock::paginate(5),
            'events' =>Event::paginate(5),
            'works'  =>Work::paginate(5)
        ]);

    }
}
