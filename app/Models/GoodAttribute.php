<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class GoodAttribute extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'attribute_id',
        'value',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
