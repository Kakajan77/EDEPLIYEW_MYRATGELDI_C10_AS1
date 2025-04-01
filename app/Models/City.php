<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class City extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function restaurant(): HasMany
    {
        return $this->hasMany(Restaurant::class);
    }

}
