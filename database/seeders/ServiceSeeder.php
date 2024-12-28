<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'SSL Certificate',
                'slug' => 'ssl-certificate',
                'description' => 'Secure your website with SSL Certificate',
                'price' => 112000,
                'billing_cycle' => 'per year',
                'icon' => 'ssl',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'Dedicated Server',
                'slug' => 'dedicated-server',
                'description' => 'High-performance dedicated server for your business',
                'price' => 499000,
                'billing_cycle' => 'per month',
                'icon' => 'server',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'name' => 'Colocation Server',
                'slug' => 'colocation-server',
                'description' => 'Secure and reliable colocation server services',
                'price' => 500000,
                'billing_cycle' => 'per month',
                'icon' => 'colocation',
                'is_active' => true,
                'order' => 3,
            ],
            [
                'name' => 'Internet Service',
                'slug' => 'internet-service',
                'description' => 'Fast and reliable internet connectivity',
                'price' => 250000,
                'billing_cycle' => 'per month',
                'icon' => 'internet',
                'is_active' => true,
                'order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
