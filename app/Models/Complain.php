<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complain extends Model
{
    //
    protected $guarded = [];

    public function complainSource(): BelongsTo
    {
        return $this->belongsTo(ComplainSource::class);
    }
    public function complainType(): BelongsTo
    {
        return $this->belongsTo(ComplainType::class);
    }
}
