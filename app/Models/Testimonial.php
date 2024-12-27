<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'role',
        'testimonial',
        'partner_id'
    ];

    /**
     * Get the partner that owns the testimonial.
     */
    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);

    }
}
