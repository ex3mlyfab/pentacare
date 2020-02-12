<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Charge extends Model
{
    //
    protected $guarded = [];

    public function chargesCategory(): BelongsTo
    {
        return $this->belongsTo(ChargesCategory::class);
    }
}
