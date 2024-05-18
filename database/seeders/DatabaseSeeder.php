<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Untuk Run data Dummy sebanyak 10
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'feri',
            'email' => 'feri@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy untuk category
        Category::factory(10)->create();

        //data dummy Product
        Product::factory(10)->create();

    }
}
