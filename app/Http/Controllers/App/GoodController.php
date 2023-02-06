<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;

class GoodController extends Controller
{
    public function index()
    {
        return view('app.goods.index');
    }

    public function category(Category $category)
    {
        return view('app.goods.category');
    }

    public function good(Good $good)
    {
        return view('app.goods.good');
    }
}
