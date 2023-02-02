<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Course;

class StudyController extends Controller
{
    public function index()
    {
        return view('app.study.index');
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
