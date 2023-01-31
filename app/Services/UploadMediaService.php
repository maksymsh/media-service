<?php

namespace App\Services;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;
use Spatie\MediaLibrary\HasMedia;

class UploadMediaService
{
    public function sync(Request $request, HasMedia $model)
    {
        HandleSpladeFileUploads::forRequest($request);

        foreach ($model->mediaCollections as $collection) {
            HandleSpladeFileUploads::syncMediaLibrary(
                $request,
                $model,
                $collection->name,
                $collection->name,
            );
        }
    }
}
