<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Page;
use App\Models\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class StudyController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'study')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        SEO::headerClass('fix');

        $courses = Course::query()->get();

        $videos = Video::query()->get();

        return view('app.study.index', [
            'page' => $page,
            'courses' => $courses,
            'videos' => $videos,
        ]);
    }

    public function courses(Course $course)
    {
        $page = Page::query()->where('code', 'courses')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        $courses = Course::query()->get();

        return view('app.study.courses', [
            'page' => $page,
            'courses' => $courses,
        ]);
    }

    public function course(Request $request, Course $course)
    {
        return view('app.study.course', [
            'course' => $course,
        ]);
    }

    public function videos()
    {
        $page = Page::query()->where('code', 'videos')->firstOrFail();

        $videos = Video::query()->get();

        $courses = Course::query()->get();

        $categories = Category::query()->where('type', Video::class)->get();

        return view('app.study.videos', [
            'page' => $page,
            'videos' => $videos,
            'courses' => $courses,
            'categories' => $categories,
        ]);
    }

    public function category(Category $category)
    {
        $videos = Video::query()->whereHas('categories', function (Builder $q) use ($category) {
            $q->where('id', $category->id);
        })->get();

        $courses = Course::query()->get();

        $categories = Category::query()->where('type', Video::class)->get();

        return view('app.study.category', [
            'category' => $category,
            'videos' => $videos,
            'courses' => $courses,
            'categories' => $categories,
        ]);
    }
}
