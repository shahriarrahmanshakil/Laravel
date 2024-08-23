<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuidesController extends Controller
{
    public function guides(){
        return view('backend.guides');
    }
}
