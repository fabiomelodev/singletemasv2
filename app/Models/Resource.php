<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'plans' => 'array'
    ];

    public function niche()
    {
        return $this->belongsTo(Niche::class);
    }
}
