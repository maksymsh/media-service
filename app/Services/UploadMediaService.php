<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Spatie\MediaLibrary\HasMedia;

class UploadMediaService
{
    public function uploadFor(HasMedia $model)
    {
        $model->registerMediaCollections();

        foreach ($model->mediaCollections as $collection) {
            /** @var UploadedFile|array<UploadedFile> $file */
            $files = request()->{$collection->name};

            if (is_array($files)) {
                $files = array_filter($files, function (UploadedFile $file) {
                    return $file->getClientOriginalName() !== 'blob';
                });
                foreach ($files as $file) {
                    if ($file instanceof UploadedFile && $file->getClientOriginalName() !== 'blob') {
                        $model->addMedia($file)->toMediaCollection($collection->name);
                    }
                }
            } else {
                $file = Arr::first($files);

                if ($file instanceof UploadedFile && $file->getClientOriginalName() !== 'blob') {
                    $model->addMedia($file)->toMediaCollection($collection->name);
                }
            }
        }
    }
}
