<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'top',
        'bottom',
        'icon',
        'name',
        'slug',
        'description',
        'description_short',
        'content',
        'price',
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

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('background')
            ->singleFile();

        $this->addMediaCollection('image')
            ->singleFile();

        $this->addMediaCollection('images');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }
}
