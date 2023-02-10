<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\StorePageRequest;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
use App\Models\Page;
use App\Services\PageService;
use App\Services\UploadMediaService;
use App\Tables\PagesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class PageController extends Controller
{
    public function __construct(
        protected PageService $pageService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  PagesTable  $pages
     * @return View
     */
    public function index(Request $request, PagesTable $pages)
    {
        return view('admin.pages.index', [
            'pages' => $pages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Page  $page
     * @return View
     */
    public function create(Request $request, Page $page)
    {
        return view('admin.pages.create', [
            'page' => $page,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePageRequest  $request
     * @return RedirectResponse
     */
    public function store(StorePageRequest $request)
    {
        $page = $this->pageService->create($request->validated());

        $this->uploadMediaService->sync($request, $page);

        Toast::success("Page #$page->id created successfully.");

        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Page  $page
     * @return View
     */
    public function show(Request $request, Page $page)
    {
        return view('admin.pages.show', [
            'page' => $page,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Page  $page
     * @return View
     */
    public function edit(Request $request, Page $page)
    {
        return view('admin.pages.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePageRequest  $request
     * @param  Page  $page
     * @return RedirectResponse
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $this->pageService->update($page, $request->validated());

        $this->uploadMediaService->sync($request, $page);

        Toast::success("Page #$page->id updated successfully.");

        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Page  $page
     * @return RedirectResponse
     */
    public function destroy(Request $request, Page $page)
    {
        $this->pageService->delete($page);

        Toast::success("Page #$page->id deleted successfully.");

        return redirect()->route('admin.pages.index');
    }
}
