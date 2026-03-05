<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->is_super_admin ? true : null;
        });

        try {
            View::share('globalSettings', [
                'general' => Setting::getValues('general')
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        // Enable compression for better performance
        if (app()->environment('production')) {
            \Illuminate\Support\Facades\Blade::directive('compress', function () {
                return '<?php if (ob_get_level()) ob_end_clean(); ob_start("ob_gzhandler"); ?>';
            });
        }

        // Event::listen();
    }
}
