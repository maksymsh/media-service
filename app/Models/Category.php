<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png']);

        $this->addMediaCollection('images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png']);
    }
}
