<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sku',
        'metal',
        'weight',
        'insert_1',
        'insert_2',
        'insert_3',
        'insert_4',
        'insert_5',
        'insert_6',
        'size',
        'availability',
        'price',
        'category_id',
        'favorites',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
