<?php

namespace App\Models;

use Altwaireb\World\Models\Country as Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /**
     * Get all of the states for the Country
     *
     * @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    /**
     * Get all of the users for the Country
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'foreign_key', 'local_key');
    }
}
