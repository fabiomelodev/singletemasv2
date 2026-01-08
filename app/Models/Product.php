<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'modules' => 'array',
        'resources' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = (string) Str::slug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = (string) Str::slug($model->name);
        });
    }

    public function niche(): BelongsTo
    {
        return $this->belongsTo(Niche::class);
    }
}
