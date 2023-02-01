<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\FileUploads\ExistingFile;
use Spatie\MediaLibrary\HasMedia;

class BaseModel extends Model
{
    public function getAttribute($key)
    {
        if ($this instanceof HasMedia) {
            foreach ($this->mediaCollections as $collection) {
                if ($key === $collection->name) {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return ExistingFile::fromMediaLibrary($media);
                }

                if ($key === $collection->name.'_preview') {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return view('components.admin.image', ['image' => ExistingFile::fromMediaLibrary($media)?->previewUrl]);
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

        return parent::save($options);
    }

    public function getActionsAttribute()
    {
        $key = Str::replace('-', '_', Str::kebab(Str::plural(class_basename($this))));

        return view('components.admin.row-actions', [
            'key' => $key,
            'item' => $this,
        ]);
    }
}
