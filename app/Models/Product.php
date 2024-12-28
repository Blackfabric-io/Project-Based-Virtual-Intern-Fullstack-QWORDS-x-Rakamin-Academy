<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'features',
        'is_featured',
        'is_active',
        'category',
        'specifications',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
        'specifications' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
    ];

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true)
                    ->where('is_active', true)
                    ->orderBy('order');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function getFormattedDiscountPriceAttribute(): string
    {
        return $this->discount_price ? 'Rp ' . number_format($this->discount_price, 0, ',', '.') : '';
    }

    public function getDiscountPercentageAttribute(): ?int
    {
        if (!$this->discount_price) return null;
        return round((($this->price - $this->discount_price) / $this->price) * 100);
    }
}
