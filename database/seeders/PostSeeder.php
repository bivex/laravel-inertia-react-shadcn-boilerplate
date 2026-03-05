<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories and tags
        $tutorials = PostCategory::where('slug', 'tutorials')->first();
        $news = PostCategory::where('slug', 'news')->first();
        $companyUpdates = PostCategory::where('slug', 'company-updates')->first();
        $insights = PostCategory::where('slug', 'industry-insights')->first();

        $laravelTag = Tag::where('name', 'laravel')->first();
        $reactTag = Tag::where('name', 'react')->first();
        $inertiaTag = Tag::where('name', 'inertia')->first();
        $tutorialTag = Tag::where('name', 'tutorial')->first();
        $tipsTag = Tag::where('name', 'tips')->first();

        $posts = [
            [
                'user_id' => 1,
                'title' => 'Getting Started with Laravel and Inertia.js',
                'slug' => 'getting-started-with-laravel-and-inertia-js',
                'short_description' => 'Learn how to build modern single-page applications with Laravel and Inertia.js without the complexity of building an API.',
                'body' => $this->getLaravelInertiaPost(),
                'meta_title' => 'Getting Started with Laravel and Inertia.js - Complete Guide',
                'meta_description' => 'A comprehensive guide to building modern web applications with Laravel and Inertia.js. Learn the basics and start building today.',
                'status' => 1,
                'views' => 1250,
                'categories' => [$tutorials->id],
                'tags' => [$laravelTag->id, $inertiaTag->id, $tutorialTag->id],
            ],
            [
                'user_id' => 1,
                'title' => '10 React Performance Tips You Need to Know',
                'slug' => '10-react-performance-tips-you-need-to-know',
                'short_description' => 'Optimize your React applications with these proven performance techniques and best practices.',
                'body' => $this->getReactPerformancePost(),
                'meta_title' => '10 React Performance Tips You Need to Know',
                'meta_description' => 'Discover 10 essential tips to boost your React application performance. From memoization to code splitting.',
                'status' => 1,
                'views' => 980,
                'categories' => [$tutorials->id],
                'tags' => [$reactTag->id, $tipsTag->id],
            ],
            [
                'user_id' => 1,
                'title' => 'Welcome to Our New Blog',
                'slug' => 'welcome-to-our-new-blog',
                'short_description' => 'We are excited to launch our new blog! Here is what you can expect from us in the coming months.',
                'body' => $this->getWelcomePost(),
                'meta_title' => 'Welcome to Our New Blog',
                'meta_description' => 'Welcome to our official blog! We share tutorials, insights, and updates about web development.',
                'status' => 1,
                'views' => 543,
                'categories' => [$news->id, $companyUpdates->id],
                'tags' => [],
            ],
            [
                'user_id' => 1,
                'title' => 'The Future of Web Development: What to Expect in 2025',
                'slug' => 'the-future-of-web-development-what-to-expect-in-2025',
                'short_description' => 'Explore the upcoming trends and technologies that will shape web development in the coming year.',
                'body' => $this->getFutureOfWebPost(),
                'meta_title' => 'The Future of Web Development: What to Expect in 2025',
                'meta_description' => 'From AI-powered development to new frameworks, discover what trends will define web development in 2025.',
                'status' => 1,
                'views' => 2341,
                'categories' => [$insights->id],
                'tags' => [],
            ],
            [
                'user_id' => 1,
                'title' => 'Building Secure Laravel Applications',
                'slug' => 'building-secure-laravel-applications',
                'short_description' => 'Learn essential security practices to protect your Laravel applications from common vulnerabilities.',
                'body' => $this->getSecurityPost(),
                'meta_title' => 'Building Secure Laravel Applications - Security Best Practices',
                'meta_description' => 'A comprehensive guide to Laravel security. Learn about authentication, authorization, SQL injection prevention, and more.',
                'status' => 1,
                'views' => 1567,
                'categories' => [$tutorials->id],
                'tags' => [$laravelTag->id, $tutorialTag->id],
            ],
            [
                'user_id' => 1,
                'title' => 'Introducing Our Latest Features',
                'slug' => 'introducing-our-latest-features',
                'short_description' => 'We have been working hard to bring you exciting new features. Here is what is new in our platform.',
                'body' => $this->getNewFeaturesPost(),
                'meta_title' => 'Introducing Our Latest Features',
                'meta_description' => 'Check out the new features we have added to our platform. Enhanced performance, new UI components, and more.',
                'status' => 1,
                'views' => 892,
                'categories' => [$companyUpdates->id],
                'tags' => [],
            ],
            [
                'user_id' => 1,
                'title' => 'Understanding React Hooks: A Deep Dive',
                'slug' => 'understanding-react-hooks-a-deep-dive',
                'short_description' => 'Master React Hooks with this in-depth guide covering useState, useEffect, useContext, and custom hooks.',
                'body' => $this->getReactHooksPost(),
                'meta_title' => 'Understanding React Hooks: A Deep Dive',
                'meta_description' => 'Learn React Hooks from scratch. Covering useState, useEffect, useContext, useMemo, useCallback and creating custom hooks.',
                'status' => 1,
                'views' => 1789,
                'categories' => [$tutorials->id],
                'tags' => [$reactTag->id, $tutorialTag->id],
            ],
        ];

        foreach ($posts as $postData) {
            $categories = $postData['categories'];
            $tags = $postData['tags'];
            unset($postData['categories'], $postData['tags']);

            $post = Post::firstOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );

            // Sync categories
            if (!empty($categories)) {
                DB::table('post_post_category')->where('post_id', $post->id)->delete();
                foreach ($categories as $categoryId) {
                    DB::table('post_post_category')->insert([
                        'post_id' => $post->id,
                        'post_category_id' => $categoryId,
                    ]);
                }
            }

            // Sync tags
            if (!empty($tags)) {
                DB::table('taggables')->where('taggable_id', $post->id)
                    ->where('taggable_type', 'App\Models\Post')
                    ->delete();
                foreach ($tags as $tagId) {
                    DB::table('taggables')->insert([
                        'tag_id' => $tagId,
                        'taggable_id' => $post->id,
                        'taggable_type' => 'App\Models\Post',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    private function getLaravelInertiaPost(): string
    {
        return <<<HTML
<h2>Introduction</h2>
<p>Laravel and Inertia.js provide a powerful combination for building modern single-page applications without the complexity of building a separate API. In this tutorial, we'll explore how to get started with this stack.</p>

<h2>What is Inertia.js?</h2>
<p>Inertia.js allows you to build single-page applications using classic server-side routing and controllers. It bridges the gap between your Laravel backend and your modern frontend framework (React, Vue, or Svelte).</p>

<h2>Why Use Laravel with Inertia?</h2>
<ul>
<li><strong>No API needed</strong> - Keep using your Laravel controllers and routes</li>
<li><strong>Seamless navigation</strong> - Page transitions feel like a SPA without the complexity</li>
<li><strong>Less boilerplate</strong> - No need to build and maintain a separate API layer</li>
<li><strong>Familiar patterns</strong> - Use Laravel's built-in features like auth, validation, and CSRF protection</li>
</ul>

<h2>Getting Started</h2>
<p>First, install Inertia.js and the server-side adapter:</p>
<pre><code>composer require inertiajs/inertia-laravel
npm install @inertiajs/react</code></pre>

<h2>Conclusion</h2>
<p>Laravel and Inertia.js provide an excellent developer experience while maintaining the simplicity of traditional server-side rendering. Give it a try on your next project!</p>
HTML;
    }

    private function getReactPerformancePost(): string
    {
        return <<<HTML
<h2>Introduction</h2>
<p>React is fast out of the box, but as your applications grow, performance optimization becomes crucial. Here are 10 essential tips to keep your React apps running smoothly.</p>

<h2>1. Use React.memo() Wisely</h2>
<p>React.memo() prevents unnecessary re-renders by memoizing component results. Use it for pure functional components that render the same output given the same props.</p>

<h2>2. Implement Code Splitting</h2>
<p>Split your code into smaller chunks using React.lazy() and Suspense. This reduces the initial bundle size and improves load times.</p>

<h2>3. Optimize Lists with Keys</h2>
<p>Always provide stable keys when rendering lists. This helps React identify which items have changed, added, or removed.</p>

<h2>4. Use useMemo for Expensive Calculations</h2>
<p>Cache expensive calculations using useMemo() so they only recompute when dependencies change.</p>

<h2>5. Debounce and Throttle Events</h2>
<p>Use debounce for search inputs and throttle for scroll/resize events to reduce the number of function calls.</p>

<h2>6. Avoid Inline Functions in Props</h2>
<p>Inline functions create new references on every render. Define functions outside the render method or use useCallback.</p>

<h2>7. Virtualize Long Lists</h2>
<p>For large lists, use virtualization libraries like react-window to only render visible items.</p>

<h2>8. Optimize Images</h2>
<p>Use lazy loading, serve responsive images, and consider modern formats like WebP.</p>

<h2>9. Minimize State Updates</h2>
<p>Batch multiple state updates together to reduce re-renders.</p>

<h2>10. Use Production Build</h2>
<p>Always use the production build for deployment. It includes optimizations like minification and dead code elimination.</p>

<h2>Conclusion</h2>
<p>By implementing these performance tips, you can ensure your React applications remain fast and responsive as they grow in complexity.</p>
HTML;
    }

    private function getWelcomePost(): string
    {
        return <<<HTML
<h2>Welcome to Our Blog!</h2>
<p>We are thrilled to launch our official blog where we'll share tutorials, insights, and updates about web development and our platform.</p>

<h2>What to Expect</h2>
<p>Here are some topics we'll be covering:</p>
<ul>
<li><strong>Tutorials</strong> - Step-by-step guides on Laravel, React, and modern web development</li>
<li><strong>Best Practices</strong> - Industry-tested patterns and practices</li>
<li><strong>Product Updates</strong> - New features and improvements to our platform</li>
<li><strong>Industry Insights</strong> - Thoughts on the latest trends in web development</li>
</ul>

<h2>Stay Connected</h2>
<p>Subscribe to our newsletter to never miss an update. Follow us on social media for daily tips and community discussions.</p>

<h2>Join the Conversation</h2>
<p>We'd love to hear from you! Leave a comment below or reach out to us on Twitter. Let's build something amazing together!</p>
HTML;
    }

    private function getFutureOfWebPost(): string
    {
        return <<<HTML
<h2>The Web is Evolving</h2>
<p>Web development continues to evolve rapidly. As we approach 2025, several exciting trends are emerging that will shape how we build web applications.</p>

<h2>AI-Powered Development</h2>
<p>Artificial intelligence is transforming how we write code. From GitHub Copilot to AI-powered code review, developers are becoming more productive. In 2025, expect even deeper integration of AI tools in development workflows.</p>

<h2>Edge Computing and Serverless</h2>
<p>Running code at the edge brings content closer to users, reducing latency. Platforms like Cloudflare Workers and Vercel Edge Functions are making edge computing accessible to all developers.</p>

<h2>WebAssembly Goes Mainstream</h2>
<p>WebAssembly enables near-native performance in the browser. Expect more applications to leverage WebAssembly for computationally intensive tasks like video editing, 3D rendering, and scientific computing.</p>

<h2>Enhanced Developer Experience</h2>
<p>Tools continue to improve, with better TypeScript support, faster build times, and more intuitive debugging experiences. The gap between development and production environments continues to shrink.</p>

<h2>Privacy and Security First</h2>
<p>With increasing privacy regulations, developers must prioritize security and data protection. Expect to see more privacy-by-default frameworks and enhanced security tooling.</p>

<h2>Conclusion</h2>
<p>The future of web development is bright. By staying informed about these trends, you'll be well-positioned to build the next generation of web applications.</p>
HTML;
    }

    private function getSecurityPost(): string
    {
        return <<<HTML
<h2>Security is Paramount</h2>
<p>Building secure applications is critical in today's digital landscape. Laravel provides many security features out of the box, but developers must use them correctly.</p>

<h2>Authentication</h2>
<p>Laravel's built-in authentication system is robust. Always use Laravel Breeze or Jetstream to scaffold authentication rather than building it from scratch.</p>

<h2>Authorization</h2>
<p>Use gates and policies to control access to resources. Never rely on client-side validation alone.</p>

<h2>SQL Injection Prevention</h2>
<p>Laravel's Eloquent ORM uses parameter binding by default, protecting against SQL injection. Never concatenate user input into queries.</p>

<h2>XSS Protection</h2>
<p>Escape user input before displaying it. Laravel's Blade templates automatically escape output, but be careful when using raw HTML.</p>

<h2>CSRF Protection</h2>
<p>Laravel generates CSRF tokens for each active user session. Always include the CSRF token in forms for state-changing operations.</p>

<h2>Secure File Uploads</h2>
<p>Validate file types, scan for malware, and store uploads outside the web root. Never trust user-supplied file names.</p>

<h2>HTTPS Everywhere</h2>
<p>Always use HTTPS in production. Configure your server to redirect HTTP to HTTPS.</p>

<h2>Conclusion</h2>
<p>Security is an ongoing process, not a one-time setup. Stay informed about new vulnerabilities and keep your dependencies updated.</p>
HTML;
    }

    private function getNewFeaturesPost(): string
    {
        return <<<HTML
<h2>Exciting New Features</h2>
<p>We've been working hard to bring you new features and improvements. Here's what's new in our latest release.</p>

<h2>Enhanced Performance</h2>
<p>We've optimized our core algorithms, resulting in 40% faster page loads and reduced memory usage.</p>

<h2>New UI Components</h2>
<p>Our component library has grown with new buttons, forms, and layout options. Build beautiful interfaces faster than ever.</p>

<h2>Improved Dashboard</h2>
<p>The dashboard has been redesigned with better data visualization and customizable widgets.</p>

<h2>API Enhancements</h2>
<p>Our API now supports pagination, filtering, and sorting for better data management.</p>

<h2>Dark Mode</h2>
<p>Dark mode is now available across the entire application. Your preference is automatically saved.</p>

<h2>Accessibility Improvements</h2>
<p>We've improved keyboard navigation, screen reader support, and contrast ratios throughout the application.</p>

<h2>What's Coming Next</h2>
<p>We're already working on the next set of features including real-time collaboration, advanced analytics, and mobile app support.</p>

<h2>Feedback Welcome</h2>
<p>Have a suggestion or found a bug? Let us know! We're constantly improving based on your feedback.</p>
HTML;
    }

    private function getReactHooksPost(): string
    {
        return <<<HTML
<h2>The Power of React Hooks</h2>
<p>React Hooks revolutionized how we write React components. They let you use state and other React features without writing a class.</p>

<h2>useState</h2>
<p>The most basic hook, useState adds state to functional components. It returns the current state value and a function to update it.</p>

<h2>useEffect</h2>
<p>useEffect lets you perform side effects in functional components. It's similar to componentDidMount, componentDidUpdate, and componentWillUnmount combined.</p>

<h2>useContext</h2>
<p>useContext lets you consume context values without nesting. It accepts a context object and returns the current context value.</p>

<h2>useReducer</h2>
<p>For complex state logic, useReducer is an alternative to useState. It's especially useful when the next state depends on the previous one.</p>

<h2>useCallback and useMemo</h2>
<p>These hooks optimize performance. useMemo memoizes expensive calculations, while useCallback memoizes functions to prevent unnecessary re-renders.</p>

<h2>Custom Hooks</h2>
<p>Create your own hooks to extract component logic into reusable functions. Custom hooks start with "use" and can call other hooks.</p>

<h2>Rules of Hooks</h2>
<ul>
<li>Only call hooks at the top level</li>
<li>Only call hooks from React functions</li>
<li>Never call hooks inside loops, conditions, or nested functions</li>
</ul>

<h2>Conclusion</h2>
<p>React Hooks provide a more direct API to React features. Once you master them, you'll write cleaner, more maintainable code.</p>
HTML;
    }
}
