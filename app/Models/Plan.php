<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'items' => 'array',
        'resources' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->order = 1;
        });
    }

    public function niche(): BelongsTo
    {
        return $this->belongsTo(Niche::class);
    }
}
