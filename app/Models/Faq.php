<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Faq extends Model
{
    protected $guarded = ['id'];

    public function niches(): BelongsToMany
    {
        return $this->belongsToMany(Niche::class, 'faq_niches', 'faq_id', 'niche_id');
    }
}
