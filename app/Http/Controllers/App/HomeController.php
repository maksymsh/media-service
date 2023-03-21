<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class HomeController extends Controller
{
    public function index()
    {
        SEO::title('Media Serice - Home');

        $page = Page::query()->where('code', 'home')->firstOrFail();

        return view('app.home.index', [
            'page' => $page,
        ]);
    }
}
