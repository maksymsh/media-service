<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Page;
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

        return view('app.study.index', [
            'page' => $page,
        ]);
    }

    public function courses(Course $course)
    {
        $page = Page::query()->where('code', 'courses')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        return view('app.study.courses');
    }

    public function course(Course $course)
    {
        return view('app.study.course');
    }

    public function videos()
    {
        return view('app.study.videos');
    }
}
