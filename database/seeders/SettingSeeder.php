<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\SettingGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('setting_groups')->truncate();
        DB::table('settings')->truncate();

        $settingGroups = [
            [
                'id' => 1,
                'parent_id' => null,
                'key' => 'general',
                'name' => 'General',
                'description' => 'General settings',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'key' => 'site_identity',
                'name' => 'Site Identity',
                'description' => 'Site identity settings',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'key' => 'site_footer',
                'name' => 'Site Footer',
                'description' => 'Site footer settings',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'parent_id' => 1,
                'key' => 'social_media',
                'name' => 'Social Media',
                'description' => 'Social media links',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $settings = [
            [
                'setting_group_id' => 2,
                'name' => 'App Name',
                'description' => 'Application name',
                'key' => 'app_name',
                'value' => 'FastAuth',
                'type' => 'text',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 2,
                'name' => 'Logo',
                'description' => 'Application logo',
                'key' => 'app_logo',
                'value' => '',
                'type' => 'image',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 2,
                'name' => 'Favicon',
                'description' => 'Application Favicon',
                'key' => 'app_favicon',
                'value' => '',
                'type' => 'image',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 2,
                'name' => 'Site Description',
                'description' => 'Site description for SEO',
                'key' => 'app_description',
                'value' => 'Building modern web applications with Laravel, React, and Inertia.js',
                'type' => 'textarea',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 2,
                'name' => 'Site Keywords',
                'description' => 'Site keywords for SEO (comma separated)',
                'key' => 'app_keywords',
                'value' => 'laravel, react, inertia, web development, php, javascript',
                'type' => 'text',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 3,
                'name' => 'Footer Text',
                'description' => 'Footer text below the logo',
                'key' => 'app_footer_logo_text',
                'value' => 'Building modern web solutions with passion and expertise.',
                'type' => 'textarea',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 3,
                'name' => 'Copyright Text',
                'description' => 'Copyright notice in footer',
                'key' => 'app_footer_copyright',
                'value' => '© ' . date('Y') . ' FastAuth. All rights reserved.',
                'type' => 'text',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 4,
                'name' => 'Twitter URL',
                'description' => 'Twitter/X profile URL',
                'key' => 'social_twitter',
                'value' => 'https://twitter.com/example',
                'type' => 'text',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 4,
                'name' => 'GitHub URL',
                'description' => 'GitHub profile URL',
                'key' => 'social_github',
                'value' => 'https://github.com/example',
                'type' => 'text',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_group_id' => 4,
                'name' => 'LinkedIn URL',
                'description' => 'LinkedIn company page URL',
                'key' => 'social_linkedin',
                'value' => 'https://linkedin.com/company/example',
                'type' => 'text',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        SettingGroup::insert($settingGroups);
        Setting::insert($settings);
    }
}
