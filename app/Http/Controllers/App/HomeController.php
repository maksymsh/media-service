<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use ProtoneMedia\Splade\Facades\SEO;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'home')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $categoriesQuery = Category::query()->whereNull('parent_id')
            ->where('top', true)
            ->where('published', true);

        $serviceCategories = (clone $categoriesQuery)->where('type', Service::class)->get();
        $productCategories = (clone $categoriesQuery)->where('type', Product::class)->get();
        $goodCategories = (clone $categoriesQuery)->where('type', Good::class)->get();

        $services = Service::query()->where('published', true)
            ->where('top', true)
            ->get();

        $products = Product::query()->where('published', true)
            ->where('top', true)
            ->get();

        return view('app.home.index', [
            'page' => $page,
            'serviceCategories' => $serviceCategories,
            'productCategories' => $productCategories,
            'goodCategories' => $goodCategories,
            'services' => $services,
            'products' => $products,
        ]);
    }
}
