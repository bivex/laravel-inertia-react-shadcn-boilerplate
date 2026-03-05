<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'laravel'],
            ['name' => 'react'],
            ['name' => 'inertia'],
            ['name' => 'javascript'],
            ['name' => 'web-development'],
            ['name' => 'php'],
            ['name' => 'vue'],
            ['name' => 'tailwind'],
            ['name' => 'tutorial'],
            ['name' => 'tips'],
            ['name' => 'best-practices'],
            ['name' => 'security'],
        ];

        foreach ($tags as $tag) {
            Tag::firstOrCreate($tag);
        }
    }
}
