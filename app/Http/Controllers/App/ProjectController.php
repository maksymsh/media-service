<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Project;
use ProtoneMedia\Splade\Facades\SEO;

class ProjectController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'projects')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        SEO::headerClass('fix');

        return view('app.projects.index', [
            'page' => $page,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        return view('app.projects.category');
    }

    public function project(Project $project)
    {
        $project->seo_title && SEO::title($project->seo_title);
        $project->seo_description && SEO::description($project->seo_description);
        $project->seo_keywords && SEO::keywords($project->seo_keywords);

        return view('app.projects.project');
    }
}
