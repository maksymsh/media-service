<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('app.about.index');
    }
}
