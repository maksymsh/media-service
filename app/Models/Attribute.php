<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function goodAttributes()
    {
        return $this->hasMany(GoodAttribute::class);
    }
}
