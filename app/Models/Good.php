<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\FileUploads\ExistingFile;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Good extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
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
        'documents',
        'video',
    ];

    protected $casts = [
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
        $this->addMediaCollection('image')
            ->singleFile();

        $this->addMediaCollection('images');
    }

    public function attributes()
    {
        return $this->hasMany(GoodAttribute::class);
    }

    public function testimonials()
    {
        return $this->morphMany(Testimonial::class, 'model');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function setDocumentsAttribute($documents)
    {
        if ($documents) {
            $files = [];
            foreach ($documents as $file) {
                if ($file instanceof UploadedFile) {
                    $file->storeAs('public/goods/'.$this->id.'/documents', $file->getClientOriginalName());

                    $files[] = $file->getClientOriginalName();
                }
            }
            $this->attributes['documents'] = $files;
        } else {
            if ($this->attributes['documents']) {
                foreach (json_decode($this->attributes['documents'] ?: '[]') as $file) {
                    Storage::disk('public')->delete('goods/'.$this->id.'/documents/'.$file);
                }
            }
            $this->attributes['documents'] = null;
        }
    }

    public function getDocumentsAttribute($documents)
    {
        $files = [];

        foreach (json_decode($this->attributes['documents'] ?: '[]') as $file) {
            $files[] = ExistingFile::fromDisk('public')->get('goods/'.$this->id.'/documents/'.$file);
        }

        return $files;
    }
}
