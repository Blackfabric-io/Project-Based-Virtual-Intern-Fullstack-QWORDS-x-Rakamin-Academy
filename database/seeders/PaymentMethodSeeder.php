<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $paymentMethods = [
            [
                'name' => 'BCA',
                'logo' => 'images/payment/bca.png',
                'type' => 'bank_transfer',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Mandiri',
                'logo' => 'images/payment/mandiri.png',
                'type' => 'bank_transfer',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'BNI',
                'logo' => 'images/payment/bni.png',
                'type' => 'bank_transfer',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'BSI',
                'logo' => 'images/payment/bsi.png',
                'type' => 'bank_transfer',
                'is_active' => true,
                'order' => 4
            ],
            [
                'name' => 'DANA',
                'logo' => 'images/payment/dana.png',
                'type' => 'e_wallet',
                'is_active' => true,
                'order' => 5
            ],
            [
                'name' => 'OVO',
                'logo' => 'images/payment/ovo.png',
                'type' => 'e_wallet',
                'is_active' => true,
                'order' => 6
            ]
        ];

        foreach ($paymentMethods as $method) {
            PaymentMethod::create($method);
        }
    }
}
