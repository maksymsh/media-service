<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class ServiceController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'services')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $services = Service::query()->get();

        $projects = Project::query()->get();

        return view('app.services.index', [
            'page' => $page,
            'services' => $services,
            'projects' => $projects,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        $projects = Project::query()->get();

        return view('app.services.category', [
            'category' => $category,
            'projects' => $projects,
        ]);
    }

    public function service(Request $request, Service $service)
    {
        $service->seo_title && SEO::title($service->seo_title);
        $service->seo_description && SEO::description($service->seo_description);
        $service->seo_keywords && SEO::keywords($service->seo_keywords);

        $services = Service::query()->get();

        return view('app.services.service', [
            'service' => $service,
            'services' => $services,
        ]);
    }
}
