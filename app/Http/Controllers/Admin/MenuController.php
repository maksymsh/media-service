<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\StoreLayoutRequest;
use App\Http\Requests\Admin\Menu\UpdateLayoutRequest;
use App\Models\Menu;
use App\Services\UploadMediaService;
use App\Tables\MenusTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class MenuController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  MenusTable  $menus
     * @return View
     */
    public function index(Request $request, MenusTable $menus)
    {
        return view('admin.menus.index', [
            'menus' => $menus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Menu  $menu
     * @return View
     */
    public function create(Request $request, Menu $menu)
    {
        return view('admin.menus.create', [
            'menu' => $menu,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreLayoutRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreLayoutRequest $request)
    {
        $menu = Menu::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $menu);

        Toast::success("Menu #$menu->id created successfully.");

        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Menu  $menu
     * @return View
     */
    public function show(Request $request, Menu $menu)
    {
        return view('admin.menus.show', [
            'menu' => $menu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Menu  $menu
     * @return View
     */
    public function edit(Request $request, Menu $menu)
    {
        return view('admin.menus.edit', [
            'menu' => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateLayoutRequest  $request
     * @param  Menu  $menu
     * @return RedirectResponse
     */
    public function update(UpdateLayoutRequest $request, Menu $menu)
    {
        $menu->update($request->validated());

        $this->uploadMediaService->sync($request, $menu);

        Toast::success("Menu #$menu->id updated successfully.");

        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Menu  $menu
     * @return RedirectResponse
     */
    public function destroy(Request $request, Menu $menu)
    {
        $menu->delete();

        Toast::success("Menu #$menu->id updated successfully.");

        return redirect()->route('admin.menu.index');
    }
}
