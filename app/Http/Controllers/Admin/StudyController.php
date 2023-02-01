<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Study\StoreStudyRequest;
use App\Http\Requests\Admin\Study\UpdateStudyRequest;
use App\Models\Study;
use App\Services\UploadMediaService;
use App\Tables\StudiesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class StudyController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  StudiesTable  $studies
     * @return View
     */
    public function index(Request $request, StudiesTable $studies)
    {
        return view('admin.studies.index', [
            'studies' => $studies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Study  $study
     * @return View
     */
    public function create(Request $request, Study $study)
    {
        return view('admin.studies.create', [
            'study' => $study,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStudyRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreStudyRequest $request)
    {
        $study = Study::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $study);

        Toast::success("Study #$study->id created successfully.");

        return redirect()->route('admin.studies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Study  $study
     * @return View
     */
    public function show(Request $request, Study $study)
    {
        return view('admin.studies.show', [
            'study' => $study,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Study  $study
     * @return View
     */
    public function edit(Request $request, Study $study)
    {
        return view('admin.studies.edit', [
            'study' => $study,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateStudyRequest  $request
     * @param  Study  $study
     * @return RedirectResponse
     */
    public function update(UpdateStudyRequest $request, Study $study)
    {
        $study->update($request->validated());

        $this->uploadMediaService->sync($request, $study);

        Toast::success("Study #$study->id updated successfully.");

        return redirect()->route('admin.studies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Study  $study
     * @return RedirectResponse
     */
    public function destroy(Request $request, Study $study)
    {
        $study->delete();

        Toast::success("Study #$study->id updated successfully.");

        return redirect()->route('admin.studies.index');
    }
}
