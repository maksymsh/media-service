<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Vacancy extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'layout_id',
        'published',
        'seo_h1',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();

        $this->addMediaCollection('images');
    }
}
