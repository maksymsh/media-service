<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'about')->firstOrFail();

        return view('app.about.index', [
            'page' => $page,
        ]);
    }
}
