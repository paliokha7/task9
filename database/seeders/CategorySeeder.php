<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class CategorySeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function ($user) {
            Category::factory(5)->create(['user_id' => $user->id]);
        });
    }
}
