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
                'name' => 'Cloud Hosting Lite',
                'slug' => 'cloud-hosting-lite',
                'description' => 'Lite Starter Package - Perfect for personal websites',
                'price' => 28000,
                'discount_price' => 25000,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 1,
                'features' => [
                    '5 GB SSD Disk Space',
                    'Unlimited Bandwidth',
                    '0.5 Core CPU',
                    'No Addon Domains',
                    'No Parked Domains',
                    '24/7 Support'
                ],
                'specifications' => [
                    'disk' => '5 GB',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '0.5 Core',
                    'addon_domains' => 0,
                    'parked_domains' => 0
                ]
            ],
            [
                'name' => 'Cloud Hosting WP',
                'slug' => 'cloud-hosting-wp',
                'description' => 'WP 1 Package - Optimized for WordPress websites',
                'price' => 95000,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 2,
                'features' => [
                    '20 GB SSD Disk Space',
                    'Unlimited Bandwidth',
                    '1 Core CPU',
                    '3 Addon Domains',
                    '3 Parked Domains',
                    'WordPress Optimized',
                    '24/7 Support'
                ],
                'specifications' => [
                    'disk' => '20 GB',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '1 Core',
                    'addon_domains' => 3,
                    'parked_domains' => 3
                ]
            ],
            [
                'name' => 'Cloud Hosting Pro',
                'slug' => 'cloud-hosting-pro',
                'description' => 'Pro 1 Package - Advanced hosting for professionals',
                'price' => 100000,
                'category' => 'cloud-hosting',
                'is_featured' => true,
                'order' => 3,
                'features' => [
                    '20 GB SSD Disk Space',
                    'Unlimited Bandwidth',
                    '1 Core CPU',
                    '3 Addon Domains',
                    '3 Parked Domains',
                    'Advanced Features',
                    '24/7 Priority Support'
                ],
                'specifications' => [
                    'disk' => '20 GB',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '1 Core',
                    'addon_domains' => 3,
                    'parked_domains' => 3
                ]
            ],
            [
                'name' => 'Cloud VPS KVM SSD',
                'slug' => 'cloud-vps-kvm-ssd',
                'description' => 'VPS SC1 Package - High-performance virtual private server',
                'price' => 135000,
                'discount_price' => 75000,
                'category' => 'vps',
                'is_featured' => true,
                'order' => 4,
                'features' => [
                    '25 GB SSD Disk Space',
                    'Unlimited Bandwidth',
                    '1 Core CPU',
                    'Unlimited Domains',
                    'Full Root Access',
                    'KVM Resources',
                    '24/7 Priority Support'
                ],
                'specifications' => [
                    'disk' => '25 GB',
                    'bandwidth' => 'Unlimited',
                    'cpu' => '1 Core',
                    'addon_domains' => -1,
                    'parked_domains' => -1
                ]
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
