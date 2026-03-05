<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'user_id' => 1,
                'name' => 'Tutorials',
                'slug' => 'tutorials',
                'description' => 'Step-by-step guides and tutorials',
            ],
            [
                'user_id' => 1,
                'name' => 'News',
                'slug' => 'news',
                'description' => 'Latest news and updates',
            ],
            [
                'user_id' => 1,
                'name' => 'Company Updates',
                'slug' => 'company-updates',
                'description' => 'Updates about our company and products',
            ],
            [
                'user_id' => 1,
                'name' => 'Industry Insights',
                'slug' => 'industry-insights',
                'description' => 'Thoughts and analysis on industry trends',
            ],
            [
                'user_id' => 1,
                'name' => 'Resources',
                'slug' => 'resources',
                'description' => 'Helpful resources and tools',
            ],
        ];

        foreach ($categories as $category) {
            PostCategory::firstOrCreate($category);
        }
    }
}
