<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Facades\Http;

class SeoUrlController extends Controller
{
    public function __invoke($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();

        if ($category) {
            $route = match ($category->type) {
                Service::class => route('services.category', $category),
                Product::class => route('products.category', $category),
                Good::class => route('goods.category', $category),
            };

            $parts = explode('?', request()->fullUrl());

            $url = $route.(count($parts) > 1 ? ('?'.array_pop($parts)) : '');

            return Http::get($url);
        }

        abort(404);
    }
}
