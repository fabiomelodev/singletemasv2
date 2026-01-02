<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Faq extends Model
{
    protected $guarded = ['id'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }

    public function scopeOrderAsc(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc');
    }

    public function scopeOrderDesc(Builder $query): Builder
    {
        return $query->orderBy('order', 'desc');
    }

    public function niches(): BelongsToMany
    {
        return $this->belongsToMany(Niche::class, 'faq_niches', 'faq_id', 'niche_id');
    }
}
