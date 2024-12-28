<?php

namespace Database\Factories;

use App\Models\Feature;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
/**
 * The name of the factory's corresponding model.
 *
 * @var string
 */
protected $model = Feature::class;

/**
 * Define the model's default state.
 *
 * @return array
 */
public function definition()
{
    $features = [
        ['name' => 'Resource Power', 'description' => 'Up to 3X resource power'],
        ['name' => 'Disk Space', 'description' => 'High performance NVMe storage'],
        ['name' => 'Bandwidth', 'description' => 'Unlimited bandwidth with Tier 1 network'],
        ['name' => 'CPU', 'description' => 'Dedicated CPU resources'],
        ['name' => 'SSL Certificate', 'description' => 'Free SSL certificate protection'],
        ['name' => 'Domain', 'description' => 'Free domain for annual plan'],
        ['name' => 'Server Location', 'description' => 'Choice of ID, SG, US server'],
        ['name' => 'Support', 'description' => '24/7 full support via ticket, chat, phone']
    ];

    $feature = $this->faker->unique()->randomElement($features);

    return [
        'name' => $feature['name'],
        'description' => $feature['description'],
        'display_order' => $this->faker->unique()->numberBetween(1, 8)
    ];
}
}
