<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'properties',
    ];
}
