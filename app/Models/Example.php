<?php

namespace App\Models;

use App\Models\Traits\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;

class Example extends BaseModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [];
}
