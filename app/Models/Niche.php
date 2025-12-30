<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Niche extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'plan_details' => 'array'
    ];

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

    public function faqs(): BelongsToMany
    {
        return $this->belongsToMany(Faq::class, 'faq_niches', 'faq_id', 'niche_id');
    }

    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }

    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }
}
