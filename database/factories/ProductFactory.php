<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hostingTypes = [
            'Value Cloud Hosting',
            'High Performance Hosting',
            'WordPress Hosting',
            'Unlimited Hosting',
            'VPS Indonesia',
            'Dedicated Server'
        ];

        $descriptions = [
            'Perfect for personal websites and blogs',
            'Ideal for business and e-commerce sites',
            'Optimized for WordPress applications',
            'Unlimited resources for growing businesses',
            'Full control with root access',
            'Enterprise-grade dedicated resources'
        ];

        $index = $this->faker->unique()->numberBetween(0, 5);

        return [
            'name' => $hostingTypes[$index],
            'price' => $this->faker->randomElement([99000, 149000, 249000, 499000, 799000, 1499000]),
            'description' => $descriptions[$index],
            'image' => 'images/products/hosting-' . ($index + 1) . '.jpg',
            'display_order' => $index
        ];
    }
}
