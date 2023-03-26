<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\UploadMediaService;
use App\Tables\CategoriesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryService $categoryService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  CategoriesTable  $categories
     * @return View
     */
    public function index(Request $request, CategoriesTable $categories)
    {
        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Category  $category
     * @return View
     */
    public function create(Request $request, Category $category)
    {
        return view('admin.categories.create', [
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = $this->categoryService->create($request->validated());

        $this->uploadMediaService->sync($request, $category);

        Toast::success("Category #$category->id created successfully.");

        return redirect()->route('admin.categories.index', ['type' => $request->get('type')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Category  $category
     * @return View
     */
    public function show(Request $request, Category $category)
    {
        return view('admin.categories.show', [
            'category' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Category  $category
     * @return View
     */
    public function edit(Request $request, Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  Category  $category
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->categoryService->update($category, $request->validated());

        $this->uploadMediaService->sync($request, $category);

        Toast::success("Category #$category->id updated successfully.");

        return redirect()->route('admin.categories.index', ['type' => $request->get('type')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Category  $category
     * @return RedirectResponse
     */
    public function destroy(Request $request, Category $category)
    {
        $this->categoryService->delete($category);

        Toast::success("Category #$category->id deleted successfully.");

        return redirect()->route('admin.categories.index', ['type' => $request->get('type')]);
    }
}
