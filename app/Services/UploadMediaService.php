<?php

namespace App\Services;

use Spatie\MediaLibrary\HasMedia;

class UploadMediaService
{
    public function uploadFor(HasMedia $model)
    {
        $model->registerMediaCollections();

        foreach ($model->mediaCollections as $collection) {
            $model->addMediaFromRequest($collection->name)->toMediaCollection($collection->name);
        }
    }
}
