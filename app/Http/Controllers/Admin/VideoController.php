<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\StoreVideoRequest;
use App\Http\Requests\Admin\Video\UpdateVideoRequest;
use App\Models\Video;
use App\Services\UploadMediaService;
use App\Services\VideoService;
use App\Tables\VideosTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class VideoController extends Controller
{
    public function __construct(
        protected VideoService $videoService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  VideosTable  $videos
     * @return View
     */
    public function index(Request $request, VideosTable $videos)
    {
        return view('admin.videos.index', [
            'videos' => $videos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Video  $video
     * @return View
     */
    public function create(Request $request, Video $video)
    {
        return view('admin.videos.create', [
            'video' => $video,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreVideoRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreVideoRequest $request)
    {
        $video = $this->videoService->create($request->validated());

        $this->uploadMediaService->sync($request, $video);

        Toast::success("Video #$video->id created successfully.");

        return redirect()->route('admin.videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Video  $video
     * @return View
     */
    public function show(Request $request, Video $video)
    {
        return view('admin.videos.show', [
            'video' => $video,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Video  $video
     * @return View
     */
    public function edit(Request $request, Video $video)
    {
        return view('admin.videos.edit', [
            'video' => $video,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateVideoRequest  $request
     * @param  Video  $video
     * @return RedirectResponse
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $this->videoService->update($video, $request->validated());

        $this->uploadMediaService->sync($request, $video);

        Toast::success("Video #$video->id updated successfully.");

        return redirect()->route('admin.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Video  $video
     * @return RedirectResponse
     */
    public function destroy(Request $request, Video $video)
    {
        $this->videoService->delete($video);

        Toast::success("Video #$video->id deleted successfully.");

        return redirect()->route('admin.videos.index');
    }
}
