<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use ProtoneMedia\Splade\Facades\SEO;

class ProductController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $categories = Category::query()->where('type', Product::class)
            ->with('products')
            ->get();

        $products = Product::query()->whereDoesntHave('categories')->get();

        return view('app.products.index', [
            'page' => $page,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        return view('app.products.category', [
            'category' => $category,
        ]);
    }

    public function product(Product $product)
    {
        $product->seo_title && SEO::title($product->seo_title);
        $product->seo_description && SEO::description($product->seo_description);
        $product->seo_keywords && SEO::keywords($product->seo_keywords);

        return view('app.products.product');
    }
}
