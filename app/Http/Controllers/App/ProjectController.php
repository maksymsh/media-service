<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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

        $categories = Category::query()->where('type', Project::class)->get();

        $projects = Project::query()->get();

        return view('app.projects.index', [
            'page' => $page,
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        SEO::headerClass('fix');

        $categories = Category::query()->where('type', Project::class)->get();

        $projects = Project::query()->whereHas('categories', function (Builder $q) use ($category) {
            $q->where('id', $category->id);
        })->get();

        return view('app.projects.category', [
            'categories' => $categories,
            'category' => $category,
            'projects' => $projects,
        ]);
    }

    public function project(Request $request, Project $project)
    {
        $project->seo_title && SEO::title($project->seo_title);
        $project->seo_description && SEO::description($project->seo_description);
        $project->seo_keywords && SEO::keywords($project->seo_keywords);

        $projects = Project::query()->get();

        return view('app.projects.project', [
            'project' => $project,
            'projects' => $projects,
        ]);
    }
}
