<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use ProtoneMedia\Splade\FileUploads\ExistingFile;

/**
 * @mixin Model
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
    }

    public function getAttribute($key)
    {
        foreach ($this->mediaCollections as $collection) {
            if ($key === $collection->name) {
                $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                return ExistingFile::fromMediaLibrary($media);
            }
        }

        return parent::getAttribute($key);
    }

    public function save(array $options = [])
    {
        foreach ($this->mediaCollections as $collection) {
            unset($this->attributes[$collection->name]);
        }
    }

    public function appendMedia()
    {
        foreach ($this->mediaCollections as $collection) {
            $this->setAttribute($collection->name, $this->{$collection->name});
        }
    }
}
