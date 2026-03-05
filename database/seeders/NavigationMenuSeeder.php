<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainMenu = Menu::firstOrCreate([
            'user_id' => 1,
            'name' => 'Main Navigation',
            'slug' => 'main-navigation',
            'items' => [
                [
                    'id' => 1,
                    'label' => 'Home',
                    'url' => '/',
                    'type' => 'internal',
                    'order' => 1,
                    'children' => [],
                ],
                [
                    'id' => 2,
                    'label' => 'Services',
                    'url' => '/services',
                    'type' => 'internal',
                    'order' => 2,
                    'children' => [],
                ],
                [
                    'id' => 3,
                    'label' => 'About Us',
                    'url' => '/about-us',
                    'type' => 'internal',
                    'order' => 3,
                    'children' => [],
                ],
                [
                    'id' => 4,
                    'label' => 'Blog',
                    'url' => '/blog',
                    'type' => 'internal',
                    'order' => 4,
                    'children' => [],
                ],
                [
                    'id' => 5,
                    'label' => 'Contact',
                    'url' => '/contact',
                    'type' => 'internal',
                    'order' => 5,
                    'children' => [],
                ],
            ],
        ]);

        // Create a footer menu as well
        $footerMenu = Menu::firstOrCreate([
            'user_id' => 1,
            'name' => 'Footer Navigation',
            'slug' => 'footer-navigation',
            'items' => [
                [
                    'id' => 1,
                    'label' => 'Privacy Policy',
                    'url' => '/privacy-policy',
                    'type' => 'internal',
                    'order' => 1,
                    'children' => [],
                ],
                [
                    'id' => 2,
                    'label' => 'Terms of Service',
                    'url' => '/terms-of-service',
                    'type' => 'internal',
                    'order' => 2,
                    'children' => [],
                ],
                [
                    'id' => 3,
                    'label' => 'Contact Us',
                    'url' => '/contact',
                    'type' => 'internal',
                    'order' => 3,
                    'children' => [],
                ],
            ],
        ]);
    }
}
