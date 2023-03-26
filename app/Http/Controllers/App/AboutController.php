<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'about')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        return view('app.about.index', [
            'page' => $page,
        ]);
    }
}
