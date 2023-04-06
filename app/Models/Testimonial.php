<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Testimonial extends BaseModel
{
    protected $fillable = [
        'model_type',
        'model_id',
        'user_id',
        'name',
        'rating',
        'comment',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function parent()
    {
        $this->belongsTo(Testimonial::class, 'parent_id');
    }

    /**
     * Relation to children.
     *
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
