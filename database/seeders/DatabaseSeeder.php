<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CategoryProductSeeder;
use Database\Seeders\ChiefSeeder;
use Database\Seeders\SalesPointSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(ChiefSeeder::class);
        $this->call(SalesPointSeeder::class);
    }
}
