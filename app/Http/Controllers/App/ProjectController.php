<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\SEO;

class ProjectController extends Controller
{
    public function index()
    {
        SEO::headerClass('fix');

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
