<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuItem\StoreMenuItemRequest;
use App\Http\Requests\Admin\MenuItem\UpdateMenuItemRequest;
use App\Models\MenuItem;
use App\Services\UploadMediaService;
use App\Tables\MenuItemsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class MenuItemController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  MenuItemsTable  $menu_items
     * @return View
     */
    public function index(Request $request, MenuItemsTable $menu_items)
    {
        return view('admin.menu_items.index', [
            'menu_items' => $menu_items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  MenuItem  $menu_item
     * @return View
     */
    public function create(Request $request, MenuItem $menu_item)
    {
        return view('admin.menu_items.create', [
            'menu_item' => $menu_item,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMenuItemRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreMenuItemRequest $request)
    {
        $menu_item = MenuItem::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $menu_item);

        Toast::success("MenuItem #$menu_item->id created successfully.");

        return redirect()->route('admin.menu_items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  MenuItem  $menu_item
     * @return View
     */
    public function show(Request $request, MenuItem $menu_item)
    {
        return view('admin.menu_items.show', [
            'menu_item' => $menu_item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  MenuItem  $menu_item
     * @return View
     */
    public function edit(Request $request, MenuItem $menu_item)
    {
        return view('admin.menu_items.edit', [
            'menu_item' => $menu_item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateMenuItemRequest  $request
     * @param  MenuItem  $menu_item
     * @return RedirectResponse
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menu_item)
    {
        $menu_item->update($request->validated());

        $this->uploadMediaService->sync($request, $menu_item);

        Toast::success("MenuItem #$menu_item->id updated successfully.");

        return redirect()->route('admin.menu_items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  MenuItem  $menu_item
     * @return RedirectResponse
     */
    public function destroy(Request $request, MenuItem $menu_item)
    {
        $menu_item->delete();

        Toast::success("MenuItem #$menu_item->id updated successfully.");

        return redirect()->route('admin.menu_items.index');
    }
}
