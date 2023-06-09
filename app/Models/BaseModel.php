<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ProtoneMedia\Splade\FileUploads\ExistingFile;
use Spatie\MediaLibrary\HasMedia;

abstract class BaseModel extends Model
{
    public function getAttribute($key)
    {
        if ($this instanceof HasMedia) {
            foreach ($this->mediaCollections as $collection) {
                if ($key === $collection->name) {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return ExistingFile::fromMediaLibrary($media);
                }

                if ($key === $collection->name.'_url') {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return ExistingFile::fromMediaLibrary($media)?->previewUrl;
                }

                if ($key === $collection->name.'_preview') {
                    $media = $collection->singleFile ? $this->getFirstMedia($collection->name) : $this->getMedia($collection->name);

                    return view('components.admin.image', ['image' => ExistingFile::fromMediaLibrary($media)?->previewUrl]);
                }
            }
        }

        return parent::getAttribute($key);
    }

    public function getUrlAttribute($url = null)
    {
        return $url ?: url($this->slug);
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
}
