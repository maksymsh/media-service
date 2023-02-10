<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Facades\Http;
use ProtoneMedia\Splade\Facades\Splade;

class SeoUrlController extends Controller
{
    public function __invoke($slug)
    {
        $route = null;

        $category = Category::query()->where('slug', $slug)->first();

        if ($category) {
            $route = match ($category->type) {
                Service::class => route('services.category', $category),
                Product::class => route('products.category', $category),
                Good::class => route('goods.category', $category),
            };
        }

        if ($route) {
            $parts = explode('?', request()->fullUrl());

            $url = $route.(count($parts) > 1 ? ('?'.array_pop($parts)) : '');

            if (Splade::isSpladeRequest()) {
                return Http::withHeaders(['X-Splade' => true])->get($url)->body();
            } else {
                return Http::withHeaders([])->get($url)->body();
            }
        }

        abort(404);
    }
}
