<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;

class SeoUrlController extends Controller
{
    public function __invoke($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();

        if ($category) {
            return match ($category->type) {
                Service::class => app(ServiceController::class)->category($category),
                Product::class => app(ProductController::class)->category($category),
                Good::class => app(GoodController::class)->category($category),
            };
        }

        abort(404);
    }
}
