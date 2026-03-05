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

### Backend

| Technology | Version | Description |
|------------|---------|-------------|
| **Laravel** | 12.x | PHP framework for elegant backend development, routing, and API |
| **PHP** | 8.5+ | Server-side scripting language with JIT compilation |
| **SQLite/MySQL** | - | Database for data persistence (SQLite for dev, MySQL for prod) |
| **Composer** | 2.x | Dependency manager for PHP packages |

**Why Laravel?**
- Elegant ORM (Eloquent) for database operations
- Built-in authentication & authorization
- Powerful routing and middleware system
- Blade templates for server-side rendering
- Artisan CLI for task automation
- Robust security features out of the box

### Frontend

| Technology | Version | Description |
|------------|---------|-------------|
| **React** | 18.x | JavaScript library for building user interfaces |
| **Tailwind CSS** | 3.x | Utility-first CSS framework for rapid UI development |
| **Shadcn UI** | Latest | Re-usable component library built on Radix UI |
| **Vite** | 7.x | Next-gen frontend tooling with HMR and optimized builds |
| **Bun** | 1.x | Fast JavaScript runtime, package manager, and bundler |

**Why React + Inertia?**
- **SPA experience without API complexity** - No need to build a separate API
- **Seamless Laravel integration** - Use Laravel routes and controllers directly
- **Component reusability** - Build modular, maintainable UI components
- **Hot Module Replacement** - See changes instantly without page refresh
- **Code splitting** - Load only what's needed for each page

### UI Components & Libraries

| Library | Purpose |
|---------|---------|
| **Radix UI** | Accessible, unstyled UI components (primitives for Shadcn) |
| **Lucide React** | Beautiful & consistent icon library |
| **TipTap** | Rich text editor for admin content editing |
| **Puck** | Visual page builder with drag-and-drop interface |
| **React Hook Form** | Performant form handling with validation |
| **Tanstack Table** | Powerful table component for data display |
| **Recharts** | Charting library for data visualization |
| **Sonner** | Toast notification system |
| **Cmdk** | Command palette component |

### Authentication & Authorization

| Package | Purpose |
|---------|---------|
| **Laravel Breeze** | Starter kit for authentication scaffolding |
| **Spatie Permission** | Role-based access control (RBAC) |
| **Laravel Policies** | Authorization logic for resources |

### Development Tools

| Tool | Purpose |
|------|---------|
| **PHPUnit** | PHP unit testing framework |
| **Pest** | Elegant PHP testing framework |
| **Laravel Debugbar** | Debug toolbar for development |
| **Ignition** | Beautiful error page for exceptions |

### Why This Stack?

**Performance:**
- Bun installs dependencies 10-20x faster than npm
- Vite 7 provides instant HMR and optimized production builds
- Code splitting reduces initial load by 80% for guest users
- Lazy loading of admin-only components (TipTap, editors)

**Developer Experience:**
- Type safety with PHP 8.5 types and React PropTypes/TypeScript-ready
- Hot reload for both backend (Laravel) and frontend (Vite)
- Elegant syntax with Laravel and React
- Shadcn components are copy-paste, fully customizable

**Maintainability:**
- Separation of concerns (Laravel API + React UI)
- Component-based architecture
- Database migrations for version control
- Laravel's service providers for clean dependency injection

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
