<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\StoreRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use App\Models\Permission;
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
        $resources = [
            'banners',
            'categories',
            'goods',
            'menus',
            'menu_items',
            'news',
            'pages',
            'products',
            'projects',
            'roles',
            'services',
            'studies',
            'users',
            'vacancies',
            'orders',
        ];

        $actions = [
            'index',
            'create',
            'edit',
            'delete',
        ];

        $permissions = [];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                $ability = $resource.'.'.$action;

                $permissions[$ability] = $role->hasPermissionTo($ability);
            }
        }

        return view('admin.roles.create', [
            'role' => $role,
            'resources' => $resources,
            'actions' => $actions,
            'permissions' => $permissions,
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
        $allPermissions = Permission::query()->get();

        $permissions = $allPermissions->map(function ($permission) use ($role) {
            $permission->value = $role->hasPermissionTo($permission->name);

            return $permission;
        })->pluck('value', 'name')->undot();

        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => $permissions,
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

        foreach ($request->get('permissions') as $resource => $actions) {
            foreach ($actions as $action => $value) {
                $ability = $resource.'.'.$action;

                if ($value) {
                    $role->givePermissionTo($ability);
                } else {
                    $role->revokePermissionTo($ability);
                }
            }
        }

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
