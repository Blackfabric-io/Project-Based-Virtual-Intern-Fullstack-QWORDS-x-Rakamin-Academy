<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        $partners = [
            [
                'name' => 'SMBC',
                'logo' => 'images/partners/smbc-logo.png',
                'description' => 'Leading financial institution in Asia',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Cimory',
                'logo' => 'images/partners/cimory-logo.png',
                'description' => 'Premium dairy products manufacturer',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Forisa',
                'logo' => 'images/partners/forisa-logo.png',
                'description' => 'Food and beverage industry leader',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'OElshéSkin',
                'logo' => 'images/partners/oelshe-skin-logo.png',
                'description' => 'Premium skincare brand',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Icon+',
                'logo' => 'images/partners/icon-plus-logo.png',
                'description' => 'Digital infrastructure solutions provider',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Horison',
                'logo' => 'images/partners/horison-logo.png',
                'description' => 'Hospitality and hotel management',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'MD Pictures',
                'logo' => 'images/partners/md-pictures-logo.png',
                'description' => 'Leading film production company',
                'order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
