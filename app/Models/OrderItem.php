<?php

namespace App\Models;

class OrderItem extends BaseModel
{
    protected $fillable = [
        'quantity',
        'price',
    ];
}
