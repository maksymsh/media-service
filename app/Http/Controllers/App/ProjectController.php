<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class ProjectController extends Controller
{
    public function index()
    {
        SEO::headerClass('fix');

        $page = Page::query()->where('code', 'projects')->firstOrFail();

        return view('app.projects.index', [
            'page' => $page,
        ]);
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
