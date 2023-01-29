<?php

namespace App\Services;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;
use Spatie\MediaLibrary\HasMedia;

class UploadMediaService
{
    public function sync(Request $request, HasMedia $model)
    {
        $model->registerMediaCollections();

        foreach ($model->mediaCollections as $collection) {
            HandleSpladeFileUploads::syncMediaLibrary(HandleSpladeFileUploads::forRequest($request, $collection->name), $model, $collection->name, $collection->name);
        }
    }
}
