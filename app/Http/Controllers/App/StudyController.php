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
        SEO::headerClass('fix');

        $page = Page::query()->where('code', 'studies')->firstOrFail();

        return view('app.study.index', [
            'page' => $page,
        ]);
    }

    public function courses(Course $course)
    {
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
