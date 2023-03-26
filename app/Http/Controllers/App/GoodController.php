<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class GoodController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $goods = Good::query()->get();

        return view('app.goods.index', [
            'page' => $page,
            'goods' => $goods,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        return view('app.goods.category', [
            'category' => $category,
        ]);
    }

    public function good(Good $good)
    {
        $good->seo_title && SEO::title($good->seo_title);
        $good->seo_description && SEO::description($good->seo_description);
        $good->seo_keywords && SEO::keywords($good->seo_keywords);

        $good->load([
            'attributes.attribute',
        ]);

        return view('app.goods.good', [
            'good' => $good,
        ]);
    }
}
