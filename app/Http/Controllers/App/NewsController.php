<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class NewsController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'news')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        SEO::headerClass('fix');

        return view('app.news.index', [
            'page' => $page,
        ]);
    }

    public function category(Category $category)
    {
        return view('app.news.category');
    }

    public function post(News $news)
    {
        return view('app.news.post');
    }
}
