<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use App\Services\UploadMediaService;
use App\Tables\ProductsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  ProductsTable  $products
     * @return View
     */
    public function index(Request $request, ProductsTable $products)
    {
        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Product  $product
     * @return View
     */
    public function create(Request $request, Product $product)
    {
        $categories = Category::query()->where('type', Product::class)
            ->pluck('name', 'id')->toArray();

        return view('admin.products.create', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProductRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $product = $this->productService->create($request->validated());

        $this->uploadMediaService->sync($request, $product);

        Toast::success("Product #$product->id created successfully.");

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Product  $product
     * @return View
     */
    public function show(Request $request, Product $product)
    {
        return view('admin.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Product  $product
     * @return View
     */
    public function edit(Request $request, Product $product)
    {
        $categories = Category::query()->where('type', Product::class)
            ->pluck('name', 'id')->toArray();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequest  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->productService->update($product, $request->validated());

        $this->uploadMediaService->sync($request, $product);

        Toast::success("Product #$product->id updated successfully.");

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function destroy(Request $request, Product $product)
    {
        $this->productService->delete($product);

        Toast::success("Product #$product->id deleted successfully.");

        return redirect()->route('admin.products.index');
    }
}
