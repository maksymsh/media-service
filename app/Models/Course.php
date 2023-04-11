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

class Course extends BaseModel implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'top',
        'bottom',
        'published',
        'title',
        'name',
        'slug',
        'description',
        'description_short',
        'detail',
        'certificate_text',
        'content',
        'program',
        'program_file',
        'seo_h1',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'published' => 'boolean',
        'program' => 'array',
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

        $this->addMediaCollection('certificate')
            ->singleFile();

        $this->addMediaCollection('images');
    }

    public function setProgramFileAttribute($file)
    {
        if ($file instanceof UploadedFile) {
            $file->storeAs('public/courses/'.$this->id.'/programs', $file->getClientOriginalName());

            $this->attributes['program_file'] = $file->getClientOriginalName();
        }

        if (is_null($file)) {
            $this->attributes['program_file'] = $file;

            if ($this->attributes['program_file']) {
                Storage::disk('public')->delete('courses/'.$this->id.'/programs/'.$this->attributes['program_file']);
            }
        }
    }

    public function getProgramFileAttribute($file)
    {
        return $file ? ExistingFile::fromDisk('public')->get('courses/'.$this->id.'/programs/'.$file) : null;
    }
}
