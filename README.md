# CMS Built with Laravel + React + Inertia.js + Shadcn

A modern Content Management System (CMS) built with **Laravel**, **React**, **Inertia.js**, and **Shadcn UI**. Features **[PUCK](https://github.com/measuredco/puck)** visual editor for drag-and-drop page building with WYSIWYG functionality.

## Features

- 🎨 **Visual Page Builder** - PUCK editor with drag-and-drop components
- 🔐 **Authentication** - Login, register, password reset with role-based access control
- 📝 **Blog System** - Posts, categories, tags with rich text editing
- 📄 **Static Pages** - Manage pages with SEO meta data
- 🎭 **Role System** - Admin, Moderator, User roles with permissions
- 🚀 **Modern Stack** - Laravel 12, React 18, Inertia.js, Shadcn UI, Tailwind CSS
- ⚡ **Fast Development** - Hot module replacement with Vite
- 📱 **Responsive** - Mobile-first design with Shadcn components

## Tech Stack

| Backend | Frontend | Tools |
|---------|----------|-------|
| Laravel 12.x | React 18.x | Inertia.js |
| PHP 8.5+ | Tailwind CSS 3.x | Shadcn UI |
| SQLite/MySQL | Vite 7.x | Puck Page Builder |
| Bun | | |

## Requirements

- **PHP** >= 8.5
- **Composer** 2.x
- **Bun** (or npm/node)
- **Laravel** >= 12.x
- **MySQL** or SQLite

## Installation

### 1. Create Project

```bash
composer create-project coderomeos/laravel-inertia-react-shadcn-boilerplate
cd laravel-inertia-react-shadcn-boilerplate
```

### 2. Install Frontend Dependencies

```bash
bun install
```

### 3. Environment Setup

Copy the example environment file:

```bash
cp .env.example .env
```

Configure your database and generate app key:

```bash
php artisan key:generate
```

### 4. Run Migrations & Seed

```bash
php artisan migrate
php artisan db:seed
```

### 5. Start Development Servers

**Terminal 1 - Laravel:**
```bash
php artisan serve
```

**Terminal 2 - Vite:**
```bash
bun run dev
```

Visit `http://127.0.0.1:8000`

## Admin Access

After running `php artisan db:seed`, you can access the admin panel:

| Credential | Value |
|------------|-------|
| **Email** | `admin@admin.com` |
| **Password** | `123456789` |
| **URL** | `/dashboard` or `/admin/dashboard` |

### Default Roles

- **Super Admin** - Full system access
- **Admin** - Admin panel access
- **Moderator** - Content moderation
- **User** - Basic access

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Laravel controllers
│   │   ├── Middleware/       # Custom middleware
│   │   └── Requests/         # Form requests
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── resources/
│   ├── js/
│   │   ├── Components/      # React components
│   │   ├── Layouts/         # Page layouts
│   │   └── Pages/           # Inertia pages
│   └── css/                 # Stylesheets
└── routes/
    ├── web.php              # Web routes
    └── api.php              # API routes
```

## Available Pages

### Guest Pages
- `/` - Homepage
- `/blog` - Blog listing
- `/blog/{slug}` - Single post
- `/about-us` - About us
- `/services` - Services
- `/contact` - Contact
- `/login` - Login
- `/register` - Register

### Admin Pages
- `/dashboard` - Admin dashboard
- `/admin/posts` - Manage posts
- `/admin/categories` - Manage categories
- `/admin/pages` - Manage pages
- `/admin/menus` - Manage navigation
- `/admin/settings` - Site settings

## Building for Production

```bash
bun run build
```

Set environment to production:
```bash
APP_ENV=production
APP_DEBUG=false
```

## Performance

The application uses code splitting and lazy loading:

- **Guest pages** load ~100KB (gzipped) - minimal JS
- **Admin pages** load ~630KB (gzipped) - includes editor libraries
- **Editor chunk** (264KB gzipped) - only loads for admin users

## Security

- CSRF protection on all forms
- SQL injection prevention via Eloquent ORM
- XSS protection with escaped output
- Password hashing with bcrypt
- Role-based access control

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Credits

- [Laravel](https://laravel.com)
- [React](https://react.dev)
- [Inertia.js](https://inertiajs.com)
- [Shadcn UI](https://ui.shadcn.com)
- [Puck](https://github.com/measuredco/puck)
- [Tailwind CSS](https://tailwindcss.com)
