<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Menu extends BaseModel
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu_id')->orderBy('position');
    }
}
