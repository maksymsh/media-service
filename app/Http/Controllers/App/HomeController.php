<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $categoriesQuery = Category::query()->where('top', true)
            ->where('published', true);

        $serviceCategories = (clone $categoriesQuery)->where('type', Service::class)->get();
        $productCategories = (clone $categoriesQuery)->where('type', Product::class)->get();
        $goodCategories = (clone $categoriesQuery)->where('type', Good::class)->get();

        return view('app.home.index', [
            'serviceCategories' => $serviceCategories,
            'productCategories' => $productCategories,
            'goodCategories' => $goodCategories,
        ]);
    }
}
