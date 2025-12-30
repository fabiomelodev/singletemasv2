<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    protected $guarded = ['id'];

    public function niche(): BelongsTo
    {
        return $this->belongsTo(Niche::class);
    }
}
