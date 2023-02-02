<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Layout\StoreLayoutRequest;
use App\Http\Requests\Admin\Layout\UpdateLayoutRequest;
use App\Models\Layout;
use App\Tables\LayoutsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  LayoutsTable  $layouts
     * @return View
     */
    public function index(Request $request, LayoutsTable $layouts)
    {
        return view('admin.layouts.index', [
            'layouts' => $layouts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Layout  $layout
     * @return View
     */
    public function create(Request $request, Layout $layout)
    {
        return view('admin.layouts.create', [
            'layout' => $layout,
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
        $layout = Layout::query()->create($request->validated());

        Toast::success("Layout #$layout->id created successfully.");

        return redirect()->route('admin.layouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Layout  $layout
     * @return View
     */
    public function show(Request $request, Layout $layout)
    {
        return view('admin.layouts.show', [
            'layout' => $layout,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Layout  $layout
     * @return View
     */
    public function edit(Request $request, Layout $layout)
    {
        return view('admin.layouts.edit', [
            'layout' => $layout,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateLayoutRequest  $request
     * @param  Layout  $layout
     * @return RedirectResponse
     */
    public function update(UpdateLayoutRequest $request, Layout $layout)
    {
        $layout->update($request->validated());

        Toast::success("Layout #$layout->id updated successfully.");

        return redirect()->route('admin.layouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Layout  $layout
     * @return RedirectResponse
     */
    public function destroy(Request $request, Layout $layout)
    {
        $layout->delete();

        Toast::success("Layout #$layout->id updated successfully.");

        return redirect()->route('admin.layouts.index');
    }
}
