<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brandID'=> Brand::factory(),
            'productCode' => $this->faker->unique()->ean13,
            'productName' => $this->faker->word,
            'description' => $this->faker->sentence,
            'productImage' => $this->faker->imageUrl(),
            'listPrice' => $this->faker->randomFloat(2, 10, 100),
            'discountPercent' => $this->faker->randomFloat(2, 0, 50),
        ];
    }
}
