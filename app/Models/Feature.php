<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'name', 'description'];

    /**
     * Get the product that owns the feature.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
