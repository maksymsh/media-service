<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use App\Models\Page;

class GoodController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        return view('app.goods.index', [
            'page' => $page,
        ]);
    }

    public function category(Category $category)
    {
        return view('app.goods.category', [
            'category' => $category,
        ]);
    }

    public function good(Good $good)
    {
        $page = Page::query()->where('code', 'good-page')->firstOrFail();

        $good->load([
            'attributes.attribute',
        ]);

        return view('app.goods.good', [
            'good' => $good,
            'page' => $page,
        ]);
    }
}
