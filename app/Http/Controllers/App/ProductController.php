<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class ProductController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'products')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $categories = Category::query()->where('type', Product::class)
            ->with('products')
            ->get();

        $products = Product::query()->whereDoesntHave('categories')->get();

        $projects = Project::query()->get();

        return view('app.products.index', [
            'page' => $page,
            'categories' => $categories,
            'products' => $products,
            'projects' => $projects,
        ]);
    }

    public function category(Request $request, Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        return view('app.products.category', [
            'category' => $category,
        ]);
    }

    public function product(Request $request, Product $product)
    {
        $product->seo_title && SEO::title($product->seo_title);
        $product->seo_description && SEO::description($product->seo_description);
        $product->seo_keywords && SEO::keywords($product->seo_keywords);

        $option = null;

        if ($optionId = $request->get('option_id')) {
            $product->load('options');

            $option = $product->options->where('id', $optionId)->first();

            if ($option) {
                $product->price = $option->price;
            }
        }

        $services = Service::query()->get();

        return view('app.products.product', [
            'product' => $product,
            'option' => $option,
            'services' => $services,
        ]);
    }
}
