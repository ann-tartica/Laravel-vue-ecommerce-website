<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_cents',
        'stock',
        'sku',
        'image',
    ];

    protected $casts = [
        'price_cents' => 'integer',
        'stock' => 'integer',
    ];

    public function getPriceAttribute()
    {
        return number_format($this->price_cents / 100, 2);
    }
}
