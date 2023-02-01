<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Models\Project;
use App\Services\UploadMediaService;
use App\Tables\ProjectsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProjectController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  ProjectsTable  $projects
     * @return View
     */
    public function index(Request $request, ProjectsTable $projects)
    {
        return view('admin.projects.index', [
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Project  $project
     * @return View
     */
    public function create(Request $request, Project $project)
    {
        return view('admin.projects.create', [
            'project' => $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $project);

        Toast::success("Project #$project->id created successfully.");

        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Project  $project
     * @return View
     */
    public function show(Request $request, Project $project)
    {
        return view('admin.projects.show', [
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Project  $project
     * @return View
     */
    public function edit(Request $request, Project $project)
    {
        return view('admin.projects.edit', [
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProjectRequest  $request
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        $this->uploadMediaService->sync($request, $project);

        Toast::success("Project #$project->id updated successfully.");

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function destroy(Request $request, Project $project)
    {
        $project->delete();

        Toast::success("Project #$project->id updated successfully.");

        return redirect()->route('admin.projects.index');
    }
}
