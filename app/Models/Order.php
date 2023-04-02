<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'model_type',
        'model_id',
        'name',
        'email',
        'phone',
        'comment',
        'status',
    ];
}
