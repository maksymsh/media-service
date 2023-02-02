<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('app.news.index');
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
