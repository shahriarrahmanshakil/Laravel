<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;

class DemoController extends Controller
{
    public function view(){
        $demos = Demo::all();
        return view('welcome', compact('demos'));
    }
}
