<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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

        $categories = Category::query()->where('type', News::class)->get();

        $news = News::query()->get();

        return view('app.news.index', [
            'page' => $page,
            'categories' => $categories,
            'news' => $news,
        ]);
    }

    public function category(Category $category)
    {
        $categories = Category::query()->where('type', News::class)->get();

        $news = News::query()->whereHas('categories', fn (Builder $q) => $q->where('id', $category->id))->get();

        return view('app.news.category', [
            'category' => $category,
            'categories' => $categories,
            'news' => $news,
        ]);
    }

    public function post(Request $request, News $news)
    {
        $otherNews = News::query()->whereHas('categories', function (Builder $q) use ($news) {
            $q->whereIn('id', $news->categories()->pluck('id')->toArray());
        })->limit(3)->get();

        return view('app.news.post', [
            'post' => $news,
            'otherNews' => $otherNews,
        ]);
    }
}
