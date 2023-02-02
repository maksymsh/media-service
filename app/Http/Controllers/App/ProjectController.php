<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('app.projects.index');
    }

    public function category()
    {
        return view('app.projects.category');
    }

    public function project()
    {
        return view('app.projects.index');
    }
}
