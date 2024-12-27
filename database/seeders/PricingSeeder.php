<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Pricing::create([
            'name' => 'Basic',
            'price' => 10.00,
            'features' => '10 GB Storage, 100 GB Bandwidth, 1 Website',
        ]);

        Pricing::create([
            'name' => 'Standard',
            'price' => 20.00,
            'features' => '50 GB Storage, 500 GB Bandwidth, 5 Websites',
        ]);

        Pricing::create([
            'name' => 'Premium',
            'price' => 30.00,
            'features' => 'Unlimited Storage, Unlimited Bandwidth, Unlimited Websites',
        ]);
    }
}
