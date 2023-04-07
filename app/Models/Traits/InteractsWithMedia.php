<?php

namespace App\Models\Traits;

use App\Models\BaseModel;

/**
 * @mixin BaseModel
 */
trait InteractsWithMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia {
        bootInteractsWithMedia as parentBootInteractsWithMedia;
    }

    public static function bootInteractsWithMedia()
    {
        static::parentBootInteractsWithMedia();

        static::retrieved(function (self $model) {
            $model->registerMediaCollections();

            $model->appendMedia();
        });

        static::replicating(function (self $model) {
            $model->registerMediaCollections();
        });
    }

    public function appendMedia()
    {
        foreach ($this->mediaCollections as $collection) {
            $this->setAttribute($collection->name, $this->{$collection->name});
        }
    }
}
