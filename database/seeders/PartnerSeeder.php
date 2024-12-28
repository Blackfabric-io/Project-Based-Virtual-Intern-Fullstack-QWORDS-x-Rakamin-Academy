<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Tribun Jogja',
                'logo' => 'images/partners/tribun-jogja.png',
                'website_url' => 'https://jogja.tribunnews.com',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Detik.com',
                'logo' => 'images/partners/detik.png',
                'website_url' => 'https://www.detik.com',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'Antara News',
                'logo' => 'images/partners/antara.png',
                'website_url' => 'https://www.antaranews.com',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'Liputan 6',
                'logo' => 'images/partners/liputan6.png',
                'website_url' => 'https://www.liputan6.com',
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
