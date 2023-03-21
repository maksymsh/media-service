<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Good\StoreGoodRequest;
use App\Http\Requests\Admin\Good\UpdateGoodRequest;
use App\Models\Attribute;
use App\Models\Good;
use App\Services\GoodService;
use App\Services\UploadMediaService;
use App\Tables\GoodsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class GoodController extends Controller
{
    public function __construct(
        protected GoodService $goodService,
        protected UploadMediaService $uploadMediaService,
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  GoodsTable  $goods
     * @return View
     */
    public function index(Request $request, GoodsTable $goods)
    {
        return view('admin.goods.index', [
            'goods' => $goods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Good  $good
     * @return View
     */
    public function create(Request $request, Good $good)
    {
        return view('admin.goods.create', [
            'good' => $good,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGoodRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreGoodRequest $request)
    {
        $good = $this->goodService->create($request->validated());

        $this->uploadMediaService->sync($request, $good);

        Toast::success("Good #$good->id created successfully.");

        return redirect()->route('admin.goods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Good  $good
     * @return View
     */
    public function show(Request $request, Good $good)
    {
        return view('admin.goods.show', [
            'good' => $good,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Good  $good
     * @return View
     */
    public function edit(Request $request, Good $good)
    {
        $attributes = Attribute::query()->pluck('name', 'id')->toArray();

        return view('admin.goods.edit', [
            'good' => $good,
            'attributes' => $attributes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGoodRequest  $request
     * @param  Good  $good
     * @return RedirectResponse
     */
    public function update(UpdateGoodRequest $request, Good $good)
    {
        $this->goodService->update($good, $request->validated());

        $this->uploadMediaService->sync($request, $good);

        Toast::success("Good #$good->id updated successfully.");

        return redirect()->route('admin.goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Good  $good
     * @return RedirectResponse
     */
    public function destroy(Request $request, Good $good)
    {
        $this->goodService->delete($good);

        Toast::success("Good #$good->id deleted successfully.");

        return redirect()->route('admin.goods.index');
    }
}
