<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Home Page
        Page::firstOrCreate(
            ['slug' => 'home'],
            [
                'user_id' => 1,
                'title' => 'Home',
                'slug' => 'home',
                'body' => $this->getHomePageContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'Welcome - Modern Web Solutions',
                'meta_description' => 'Building modern web applications with Laravel, React, and Inertia.js. Expert development services for your next project.',
            ]
        );

        // About Us Page
        Page::firstOrCreate(
            ['slug' => 'about-us'],
            [
                'user_id' => 1,
                'title' => 'About Us',
                'slug' => 'about-us',
                'body' => $this->getAboutUsContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'About Us - Our Story & Team',
                'meta_description' => 'Learn about our company, our values, and the team behind our successful web development projects.',
            ]
        );

        // Services Page
        Page::firstOrCreate(
            ['slug' => 'services'],
            [
                'user_id' => 1,
                'title' => 'Services',
                'slug' => 'services',
                'body' => $this->getServicesContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'Our Services - Web Development & More',
                'meta_description' => 'We offer comprehensive web development services including custom applications, API development, and frontend expertise.',
            ]
        );

        // Contact Page
        Page::firstOrCreate(
            ['slug' => 'contact'],
            [
                'user_id' => 1,
                'title' => 'Contact Us',
                'slug' => 'contact',
                'body' => $this->getContactContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'Contact Us - Get in Touch',
                'meta_description' => 'Have a project in mind? Get in touch with our team to discuss how we can help bring your vision to life.',
            ]
        );

        // Privacy Policy Page
        Page::firstOrCreate(
            ['slug' => 'privacy-policy'],
            [
                'user_id' => 1,
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'body' => $this->getPrivacyPolicyContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'Privacy Policy',
                'meta_description' => 'Our privacy policy explains how we collect, use, and protect your personal information.',
            ]
        );

        // Terms of Service Page
        Page::firstOrCreate(
            ['slug' => 'terms-of-service'],
            [
                'user_id' => 1,
                'title' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'body' => $this->getTermsOfServiceContent(),
                'puck_body' => [
                    'content' => [],
                    'root' => [],
                ],
                'status' => 1,
                'meta_title' => 'Terms of Service',
                'meta_description' => 'Our terms of service outline the rules and regulations for using our platform.',
            ]
        );
    }

    private function getHomePageContent(): string
    {
        return <<<HTML
<h1>Welcome to Modern Web Solutions</h1>
<p>We build beautiful, performant web applications using cutting-edge technologies like Laravel, React, and Inertia.js.</p>

<h2>What We Do</h2>
<p>Our team specializes in creating custom web solutions that help businesses thrive in the digital age. From simple websites to complex applications, we deliver results that exceed expectations.</p>

<h2>Why Choose Us?</h2>
<ul>
<li><strong>Expert Team</strong> - Years of experience in modern web development</li>
<li><strong>Clean Code</strong> - We write maintainable, scalable code</li>
<li><strong>Fast Delivery</strong> - We respect deadlines and deliver on time</li>
<li><strong>Ongoing Support</strong> - We're here for you long after launch</li>
</ul>

<h2>Latest From Our Blog</h2>
<p>Check out our latest tutorials and insights on web development, best practices, and industry trends.</p>

<h2>Let's Build Something Great Together</h2>
<p>Ready to start your project? Contact us today for a free consultation.</p>
HTML;
    }

    private function getAboutUsContent(): string
    {
        return <<<HTML
<h1>About Us</h1>
<p>We are a team of passionate developers dedicated to building exceptional web experiences.</p>

<h2>Our Story</h2>
<p>Founded with a vision to simplify web development, we have grown from a small startup to a trusted partner for businesses worldwide. Our journey has been driven by a commitment to excellence and a passion for innovation.</p>

<h2>Our Mission</h2>
<p>To empower businesses with modern, scalable web solutions that drive growth and success. We believe in the power of technology to transform businesses and improve lives.</p>

<h2>Our Values</h2>
<ul>
<li><strong>Quality</strong> - We never compromise on quality</li>
<li><strong>Integrity</strong> - Honest communication and ethical practices</li>
<li><strong>Innovation</strong> - Always exploring new technologies and methods</li>
<li><strong>Collaboration</strong> - We work closely with our clients as partners</li>
</ul>

<h2>Our Team</h2>
<p>Our diverse team brings together expertise in Laravel, React, Vue, and modern frontend technologies. We are lifelong learners who stay current with the latest developments in web technology.</p>

<h2>Our Approach</h2>
<p>We take a collaborative, user-centered approach to every project. From discovery to deployment and beyond, we ensure your project is a success.</p>
HTML;
    }

    private function getServicesContent(): string
    {
        return <<<HTML
<h1>Our Services</h1>
<p>We offer comprehensive web development services tailored to your business needs.</p>

<h2>Custom Web Applications</h2>
<p>We build custom web applications from the ground up, designed to meet your specific requirements. Whether you need a simple website or a complex platform, we have the expertise to deliver.</p>

<h2>Laravel Development</h2>
<p>Specializing in Laravel, we create robust, secure, and scalable backend solutions. From REST APIs to complex business logic, we harness the full power of Laravel.</p>

<h2>React & Frontend Development</h2>
<p>Our frontend expertise includes React, Vue, and modern JavaScript. We create beautiful, responsive interfaces that provide exceptional user experiences.</p>

<h2>API Development & Integration</h2>
<p>Need to integrate with third-party services or build your own API? We have extensive experience creating and integrating RESTful APIs and GraphQL endpoints.</p>

<h2>E-Commerce Solutions</h2>
<p>We build secure, user-friendly e-commerce platforms that help you sell online. From product catalogs to payment processing, we handle it all.</p>

<h2>Performance Optimization</h2>
<p>Is your website running slowly? We analyze and optimize web applications for maximum performance, improving both user experience and search rankings.</p>

<h2>Maintenance & Support</h2>
<p>We provide ongoing maintenance and support to keep your application running smoothly. From security updates to feature enhancements, we've got you covered.</p>

<h2>Get Started Today</h2>
<p>Contact us to discuss your project and learn how we can help your business succeed online.</p>
HTML;
    }

    private function getContactContent(): string
    {
        return <<<HTML
<h1>Contact Us</h1>
<p>We'd love to hear from you. Whether you have a question about our services or want to discuss a project, get in touch.</p>

<h2>Send Us a Message</h2>
<p>Fill out the form below and we'll get back to you within 24 hours.</p>

<h2>Email</h2>
<p>For general inquiries: hello@example.com</p>
<p>For sales: sales@example.com</p>
<p>For support: support@example.com</p>

<h2>Office</h2>
<p>123 Web Development Street<br>
Tech City, TC 12345<br>
United States</p>

<h2>Business Hours</h2>
<ul>
<li>Monday - Friday: 9:00 AM - 6:00 PM</li>
<li>Saturday: 10:00 AM - 4:00 PM</li>
<li>Sunday: Closed</li>
</ul>

<h2>Social Media</h2>
<p>Follow us on social media for updates, tips, and insights:</p>
<ul>
<li>Twitter: @example</li>
<li>LinkedIn: /company/example</li>
<li>GitHub: @example</li>
</ul>

<h2>Get a Free Quote</h2>
<p>Ready to start your project? Contact us today for a free consultation and quote. We'll help you define your requirements and provide a detailed proposal.</p>
HTML;
    }

    private function getPrivacyPolicyContent(): string
    {
        return <<<HTML
<h1>Privacy Policy</h1>
<p>Last updated: March 2025</p>

<h2>Information We Collect</h2>
<p>We collect information you provide directly to us, including when you create an account, make a purchase, or contact us for support.</p>

<h2>How We Use Your Information</h2>
<p>We use the information we collect to provide, maintain, and improve our services, process transactions, and communicate with you.</p>

<h2>Information Sharing</h2>
<p>We do not sell, trade, or rent your personal information to third parties. We may share your information only as described in this policy or with your consent.</p>

<h2>Data Security</h2>
<p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

<h2>Your Rights</h2>
<p>You have the right to access, correct, or delete your personal information. Contact us if you wish to exercise these rights.</p>

<h2>Cookies</h2>
<p>We use cookies and similar technologies to improve your experience, analyze usage, and assist in our marketing efforts.</p>

<h2>Contact Us</h2>
<p>If you have any questions about this Privacy Policy, please contact us at privacy@fastauth.com.</p>
HTML;
    }

    private function getTermsOfServiceContent(): string
    {
        return <<<HTML
<h1>Terms of Service</h1>
<p>Last updated: March 2025</p>

<h2>Acceptance of Terms</h2>
<p>By accessing or using our services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>

<h2>Changes to Terms</h2>
<p>We reserve the right to modify these terms at any time. Your continued use of our services after any changes constitutes acceptance of the new terms.</p>

<h2>Account Responsibilities</h2>
<p>You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.</p>

<h2>Prohibited Activities</h2>
<ul>
<li>Using the service for any illegal purpose</li>
<li>Attempting to gain unauthorized access to our systems</li>
<li>Interfering with other users' enjoyment of the service</li>
<li>Transmitting viruses or other harmful code</li>
</ul>

<h2>Intellectual Property</h2>
<p>All content, features, and functionality of our services are owned by us and are protected by copyright, trademark, and other intellectual property laws.</p>

<h2>Termination</h2>
<p>We may terminate or suspend your account at any time for violation of these terms or for any other reason at our sole discretion.</p>

<h2>Limitation of Liability</h2>
<p>Our services are provided "as is" without warranties of any kind. We shall not be liable for any indirect, incidental, special, or consequential damages.</p>

<h2>Governing Law</h2>
<p>These terms shall be governed by the laws of the jurisdiction in which we are registered.</p>

<h2>Contact Us</h2>
<p>For questions about these Terms of Service, please contact us at legal@fastauth.com.</p>
HTML;
    }
}
