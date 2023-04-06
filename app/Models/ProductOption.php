<?php

namespace App\Models;

class ProductOption extends BaseModel
{
    protected $fillable = [
        'product_id',
        'name',
        'price',
    ];
}
