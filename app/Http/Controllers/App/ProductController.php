<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        return view('app.products.index', [
            'page' => $page,
        ]);
    }

    public function index2()
    {
        $page = Page::query()->where('code', 'products')->firstOrFail();

        return view('app.products.index2', [
            'page' => $page,
        ]);
    }

    public function category(Category $category)
    {
        return view('app.products.category', [
            'category' => $category,
        ]);
    }

    public function category2(Product $product)
    {
        return view('app.products.category2');
    }

    public function product(Product $product)
    {
        return view('app.products.product');
    }

    public function product2(Product $product)
    {
        return view('app.products.product2');
    }
}
