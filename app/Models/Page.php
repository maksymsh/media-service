<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Lang;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'top',
        'bottom',
        'code',
        'title',
        'slug',
        'url',
        'description',
        'description_short',
        'content',
        'published',
        'seo_h1',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'top' => 'boolean',
        'bottom' => 'boolean',
        'published' => 'boolean',
    ];

    protected $appends = [
        'language_lines',
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

    public function getLanguageLinesAttribute()
    {
        $lines = Lang::get('pages.'.$this->code);

        return is_string($lines) ? [] : $lines;
    }
}
