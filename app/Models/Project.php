<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = (string) Str::slug($model->name);

            $model->status = (string) $model->status;
        });

        static::updating(function ($model) {
            $model->slug = (string) Str::slug($model->name);

            $model->status = (string) $model->status;
        });
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }

    public function niche(): BelongsTo
    {
        return $this->belongsTo(Niche::class);
    }
}
