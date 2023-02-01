<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\StoreRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use App\Models\Role;
use App\Services\UploadMediaService;
use App\Tables\RolesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class RoleController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  RolesTable  $roles
     * @return View
     */
    public function index(Request $request, RolesTable $roles)
    {
        return view('admin.roles.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Role  $role
     * @return View
     */
    public function create(Request $request, Role $role)
    {
        return view('admin.roles.create', [
            'role' => $role,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRoleRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $role);

        Toast::success("Role #$role->id created successfully.");

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Role  $role
     * @return View
     */
    public function show(Request $request, Role $role)
    {
        return view('admin.roles.show', [
            'role' => $role,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Role  $role
     * @return View
     */
    public function edit(Request $request, Role $role)
    {
        return view('admin.roles.edit', [
            'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRoleRequest  $request
     * @param  Role  $role
     * @return RedirectResponse
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->validated());

        $this->uploadMediaService->sync($request, $role);

        Toast::success("Role #$role->id updated successfully.");

        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Role  $role
     * @return RedirectResponse
     */
    public function destroy(Request $request, Role $role)
    {
        $role->delete();

        Toast::success("Role #$role->id updated successfully.");

        return redirect()->route('admin.roles.index');
    }
}
