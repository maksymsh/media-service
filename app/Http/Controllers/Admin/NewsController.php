<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Http\Requests\Admin\News\UpdateNewsRequest;
use App\Models\News;
use App\Services\NewsService;
use App\Services\UploadMediaService;
use App\Tables\NewsTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class NewsController extends Controller
{
    public function __construct(
        protected NewsService $newsService,
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  NewsTable  $news
     * @return View
     */
    public function index(Request $request, NewsTable $news)
    {
        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  News  $news
     * @return View
     */
    public function create(Request $request, News $news)
    {
        return view('admin.news.create', [
            'news' => $news,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreNewsRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $news = $this->newsService->create($request->validated());

        $this->uploadMediaService->sync($request, $news);

        Toast::success("News #$news->id created successfully.");

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  News  $news
     * @return View
     */
    public function show(Request $request, News $news)
    {
        return view('admin.news.show', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  News  $news
     * @return View
     */
    public function edit(Request $request, News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateNewsRequest  $request
     * @param  News  $news
     * @return RedirectResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $this->newsService->update($news, $request->validated());

        $this->uploadMediaService->sync($request, $news);

        Toast::success("News #$news->id updated successfully.");

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  News  $news
     * @return RedirectResponse
     */
    public function destroy(Request $request, News $news)
    {
        $this->newsService->delete($news);

        Toast::success("News #$news->id deleted successfully.");

        return redirect()->route('admin.news.index');
    }
}
