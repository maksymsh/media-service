<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\StoreMenuRequest;
use App\Http\Requests\Admin\Menu\UpdateMenuRequest;
use App\Models\Menu;
use App\Services\MenuService;
use App\Services\UploadMediaService;
use App\Tables\MenusTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class MenuController extends Controller
{
    public function __construct(
        protected MenuService $menuService,
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
     * @param  StoreMenuRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = $this->menuService->create($request->validated());

        $this->uploadMediaService->sync($request, $menu);

        Toast::success("Menu #$menu->id created successfully.");

        return redirect()->route('admin.menus.index');
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
     * @param  UpdateMenuRequest  $request
     * @param  Menu  $menu
     * @return RedirectResponse
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $this->menuService->update($menu, $request->validated());

        $this->uploadMediaService->sync($request, $menu);

        Toast::success("Menu #$menu->id updated successfully.");

        return redirect()->route('admin.menus.index');
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
        $this->menuService->delete($menu);

        Toast::success("Menu #$menu->id deleted successfully.");

        return redirect()->route('admin.menus.index');
    }
}
