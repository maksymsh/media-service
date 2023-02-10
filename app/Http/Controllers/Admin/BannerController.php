<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banner\StoreBannerRequest;
use App\Http\Requests\Admin\Banner\UpdateBannerRequest;
use App\Models\Banner;
use App\Services\BannerService;
use App\Services\UploadMediaService;
use App\Tables\BannersTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class BannerController extends Controller
{
    public function __construct(
        protected BannerService $bannerService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  BannersTable  $banners
     * @return View
     */
    public function index(Request $request, BannersTable $banners)
    {
        return view('admin.banners.index', [
            'banners' => $banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Banner  $banner
     * @return View
     */
    public function create(Request $request, Banner $banner)
    {
        return view('admin.banners.create', [
            'banner' => $banner,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreBannerRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = $this->bannerService->create($request->validated());

        $this->uploadMediaService->sync($request, $banner);

        Toast::success("Banner #$banner->id created successfully.");

        return redirect()->route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Banner  $banner
     * @return View
     */
    public function show(Request $request, Banner $banner)
    {
        return view('admin.banners.show', [
            'banner' => $banner,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Banner  $banner
     * @return View
     */
    public function edit(Request $request, Banner $banner)
    {
        return view('admin.banners.edit', [
            'banner' => $banner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateBannerRequest  $request
     * @param  Banner  $banner
     * @return RedirectResponse
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $this->bannerService->update($banner, $request->validated());

        $this->uploadMediaService->sync($request, $banner);

        Toast::success("Banner #$banner->id updated successfully.");

        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Banner  $banner
     * @return RedirectResponse
     */
    public function destroy(Request $request, Banner $banner)
    {
        $this->bannerService->delete($banner);

        Toast::success("Banner #$banner->id deleted successfully.");

        return redirect()->route('admin.banners.index');
    }
}
