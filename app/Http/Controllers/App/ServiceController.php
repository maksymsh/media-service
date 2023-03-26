<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'services')->firstOrFail();

        $services = Service::query()->get();

        return view('app.services.index', [
            'page' => $page,
            'services' => $services,
        ]);
    }

    public function category(Category $category)
    {
        return view('app.services.category', [
            'category' => $category,
        ]);
    }

    public function service(Service $service)
    {
        return view('app.services.service', [
            'service' => $service,
        ]);
    }
}
