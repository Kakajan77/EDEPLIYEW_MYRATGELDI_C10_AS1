<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    /** @use HasFactory<\Database\Factories\RestaurantFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
