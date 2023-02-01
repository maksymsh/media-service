<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Http\Requests\Admin\Service\UpdateServiceRequest;
use App\Models\Service;
use App\Services\UploadMediaService;
use App\Tables\ServicesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ServiceController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  ServicesTable  $services
     * @return View
     */
    public function index(Request $request, ServicesTable $services)
    {
        return view('admin.services.index', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Service  $service
     * @return View
     */
    public function create(Request $request, Service $service)
    {
        return view('admin.services.create', [
            'service' => $service,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreServiceRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreServiceRequest $request)
    {
        $service = Service::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $service);

        Toast::success("Service #$service->id created successfully.");

        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Service  $service
     * @return View
     */
    public function show(Request $request, Service $service)
    {
        return view('admin.services.show', [
            'service' => $service,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Service  $service
     * @return View
     */
    public function edit(Request $request, Service $service)
    {
        return view('admin.services.edit', [
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateServiceRequest  $request
     * @param  Service  $service
     * @return RedirectResponse
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());

        $this->uploadMediaService->sync($request, $service);

        Toast::success("Service #$service->id updated successfully.");

        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Service  $service
     * @return RedirectResponse
     */
    public function destroy(Request $request, Service $service)
    {
        $service->delete();

        Toast::success("Service #$service->id updated successfully.");

        return redirect()->route('admin.services.index');
    }
}
