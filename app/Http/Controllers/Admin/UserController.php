<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\UploadMediaService;
use App\Services\UserService;
use App\Tables\UsersTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  UsersTable  $users
     * @return View
     */
    public function index(Request $request, UsersTable $users)
    {
        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return View
     */
    public function create(Request $request, User $user)
    {
        $roles = Role::query()->pluck('name', 'id')->toArray();

        return view('admin.users.create', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->userService->create($request->validated());

        $this->uploadMediaService->sync($request, $user);

        Toast::success("User #$user->id created successfully.");

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return View
     */
    public function show(Request $request, User $user)
    {
        return view('admin.users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return View
     */
    public function edit(Request $request, User $user)
    {
        $roles = Role::query()->pluck('name', 'id')->toArray();

        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  User  $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userService->update($user, $request->validated());

        $this->uploadMediaService->sync($request, $user);

        Toast::success("User #$user->id updated successfully.");

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return RedirectResponse
     */
    public function destroy(Request $request, User $user)
    {
        if ($user->id !== $request->user()?->id) {
            $this->userService->delete($user);

            Toast::success("User #$user->id updated successfully.");
        } else {
            Toast::danger("Cannot delete authenticated User #$user->id.");
        }

        return redirect()->route('admin.users.index');
    }
}
