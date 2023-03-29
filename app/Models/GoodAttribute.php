<?php

namespace App\Models;

class GoodAttribute extends BaseModel
{
    protected $fillable = [
        'attribute_id',
        'value',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function good()
    {
        return $this->belongsTo(Good::class);
    }
}
