<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\WorksSeeder;
use Database\Seeders\AppliesSeeder;
use Database\Seeders\StartupsSeeder;
use Database\Seeders\ProspectsSeeder;
use Database\Seeders\CategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AppliesSeeder::class,
            CategoriesSeeder::class,
            NewsSeeder::class,
            ProspectsSeeder::class,
            StartupsSeeder::class,
            UsersSeeder::class,
            WorksSeeder::class,
        ]);
    }
}
