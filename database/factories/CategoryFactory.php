<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),

            'name' => Str::random(10), // Генерує випадковий рядок довжиною 10 символів
        ];
    }
}
