<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use NodeTrait;

    protected $fillable = [
        'type',
        'parent_id',
        'name',
        'slug',
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

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function goods()
    {
        return $this->belongsToMany(Good::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
