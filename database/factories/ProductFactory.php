<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'category_id' => Category::factory(), 
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
