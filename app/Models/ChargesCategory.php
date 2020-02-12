<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChargesCategory extends Model
{
    //
    protected $guarded = [];

    public function charges(): HasMany
    {
        return $this->hasMany(Charge::class);
    }
}
