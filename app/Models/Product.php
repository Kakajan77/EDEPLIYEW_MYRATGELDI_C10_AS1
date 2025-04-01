<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
