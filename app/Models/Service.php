<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
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

    public function scopeActive($query)
    {
        return $query->where('status', '1');
    }
}
