<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('set FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Product::truncate();
        User::factory(40)->create();
        Product::factory(50)->create();

    }
}
