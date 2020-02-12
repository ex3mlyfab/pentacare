<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComplainSource extends Model
{
    //
    protected $guarded = [];
    public function complains(): HasMany
    {
        return $this->hasMany(Complain::class);
    }
}
