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
        SEO::headerClass('fix');

        $page = Page::query()->where('code', 'news')->firstOrFail();

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
