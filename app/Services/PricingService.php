<?php

namespace App\Services;

use App\Models\Pricing;

class PricingService
{
    /**
     * Retrieve all pricing packages.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllPricings()
    {
        return Pricing::all();
    }
}
