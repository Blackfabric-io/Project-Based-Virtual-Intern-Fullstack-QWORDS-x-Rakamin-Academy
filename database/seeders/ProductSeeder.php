<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Value Cloud Hosting',
                'slug' => 'value-cloud-hosting',
                'description' => 'Perfect for personal websites and small businesses',
                'price' => 14900,
                'discount_price' => 9900,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 1,
                'features' => [
                    '3GB NVMe Storage',
                    'Unlimited Bandwidth',
                    '0.5 Core CPU',
                    '1 Domain',
                    'Free SSL Certificate',
                    '24/7 Support'
                ],
                'specifications' => [
                    'storage' => '3GB NVMe',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '0.5 Core',
                    'ram' => '512MB',
                    'addon_domains' => 1
                ]
            ],
            [
                'name' => 'Signature Cloud Hosting',
                'slug' => 'signature-cloud-hosting',
                'description' => 'Ideal for growing businesses and e-commerce',
                'price' => 89900,
                'discount_price' => 69900,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 2,
                'features' => [
                    '10GB NVMe Storage',
                    'Unlimited Bandwidth',
                    '1 Core CPU',
                    '5 Domains',
                    'Free SSL Certificate',
                    '24/7 Support',
                    'Daily Backup'
                ],
                'specifications' => [
                    'storage' => '10GB NVMe',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '1 Core',
                    'ram' => '1GB',
                    'addon_domains' => 5
                ]
            ],
            [
                'name' => 'Enterprise Cloud Hosting',
                'slug' => 'enterprise-cloud-hosting',
                'description' => 'Advanced hosting for high-traffic websites',
                'price' => 129900,
                'discount_price' => 99900,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 3,
                'features' => [
                    '20GB NVMe Storage',
                    'Unlimited Bandwidth',
                    '2 Core CPU',
                    'Unlimited Domains',
                    'Free SSL Certificate',
                    '24/7 Priority Support',
                    'Daily Backup',
                    'DDoS Protection'
                ],
                'specifications' => [
                    'storage' => '20GB NVMe',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '2 Core',
                    'ram' => '2GB',
                    'addon_domains' => -1 // unlimited
                ]
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
