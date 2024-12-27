<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description'];

    /**
     * Get the features for the product.
     */
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
