<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function restaurant(): HasMany
    {
        return $this->hasMany(Restaurant::class);
    }

}
