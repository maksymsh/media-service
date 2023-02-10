<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\StoreCourseRequest;
use App\Http\Requests\Admin\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Services\CourseService;
use App\Services\UploadMediaService;
use App\Tables\CoursesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class CourseController extends Controller
{
    public function __construct(
        protected CourseService $courseService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  CoursesTable  $courses
     * @return View
     */
    public function index(Request $request, CoursesTable $courses)
    {
        return view('admin.courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Course  $course
     * @return View
     */
    public function create(Request $request, Course $course)
    {
        return view('admin.courses.create', [
            'course' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCourseRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCourseRequest $request)
    {
        $course = $this->courseService->create($request->validated());

        $this->uploadMediaService->sync($request, $course);

        Toast::success("Course #$course->id created successfully.");

        return redirect()->route('admin.courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Course  $course
     * @return View
     */
    public function show(Request $request, Course $course)
    {
        return view('admin.courses.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Course  $course
     * @return View
     */
    public function edit(Request $request, Course $course)
    {
        return view('admin.courses.edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCourseRequest  $request
     * @param  Course  $course
     * @return RedirectResponse
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $this->courseService->update($course, $request->validated());

        $this->uploadMediaService->sync($request, $course);

        Toast::success("Course #$course->id updated successfully.");

        return redirect()->route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Course  $course
     * @return RedirectResponse
     */
    public function destroy(Request $request, Course $course)
    {
        $this->courseService->delete($course);

        Toast::success("Course #$course->id deleted successfully.");

        return redirect()->route('admin.courses.index');
    }
}
