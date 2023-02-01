<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\FileUploads\ExistingFile;
use Spatie\MediaLibrary\HasMedia;

class BaseModel extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::retrieved(function (self $model) {
            if ($model instanceof HasMedia) {
                $model->registerMediaCollections();

                $model->appendMedia();
            }
        });
    }

    public function getAttribute($key)
    {
        if ($this instanceof HasMedia) {
            foreach ($this->mediaCollections as $collection) {
                if ($key === $collection->name) {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return ExistingFile::fromMediaLibrary($media);
                }
            }
        }

        return parent::getAttribute($key);
    }

    public function save(array $options = [])
    {
        if ($this instanceof HasMedia) {
            foreach ($this->mediaCollections as $collection) {
                unset($this->attributes[$collection->name]);
            }
        }
    }

    public function getActionsAttribute()
    {
        $key = Str::plural(Str::camel(class_basename($this)));

        return view('components.admin.row-actions', [
            'key' => $key,
            'item' => $this,
        ]);
    }
}
