<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Vacancy\StoreVacancyRequest;
use App\Http\Requests\Admin\Vacancy\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Services\UploadMediaService;
use App\Services\VacancyService;
use App\Tables\VacanciesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class VacancyController extends Controller
{
    public function __construct(
        protected VacancyService $vacancyService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  VacanciesTable  $vacancies
     * @return View
     */
    public function index(Request $request, VacanciesTable $vacancies)
    {
        return view('admin.vacancies.index', [
            'vacancies' => $vacancies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Vacancy  $vacancy
     * @return View
     */
    public function create(Request $request, Vacancy $vacancy)
    {
        return view('admin.vacancies.create', [
            'vacancy' => $vacancy,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreVacancyRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreVacancyRequest $request)
    {
        $vacancy = $this->vacancyService->create($request->validated());

        $this->uploadMediaService->sync($request, $vacancy);

        Toast::success("Vacancy #$vacancy->id created successfully.");

        return redirect()->route('admin.vacancies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Vacancy  $vacancy
     * @return View
     */
    public function show(Request $request, Vacancy $vacancy)
    {
        return view('admin.vacancies.show', [
            'vacancy' => $vacancy,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Vacancy  $vacancy
     * @return View
     */
    public function edit(Request $request, Vacancy $vacancy)
    {
        return view('admin.vacancies.edit', [
            'vacancy' => $vacancy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateVacancyRequest  $request
     * @param  Vacancy  $vacancy
     * @return RedirectResponse
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        $this->vacancyService->update($vacancy, $request->validated());

        $this->uploadMediaService->sync($request, $vacancy);

        Toast::success("Vacancy #$vacancy->id updated successfully.");

        return redirect()->route('admin.vacancies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Vacancy  $vacancy
     * @return RedirectResponse
     */
    public function destroy(Request $request, Vacancy $vacancy)
    {
        $this->vacancyService->delete($vacancy);

        Toast::success("Vacancy #$vacancy->id deleted successfully.");

        return redirect()->route('admin.vacancies.index');
    }
}
