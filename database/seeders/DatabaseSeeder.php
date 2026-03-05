<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PostCategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            PageSeeder::class,
            NavigationMenuSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            SettingSeeder::class,
        ]);
    }
}
