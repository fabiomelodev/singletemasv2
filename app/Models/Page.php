<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $guarded = ['id'];

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

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }
}
