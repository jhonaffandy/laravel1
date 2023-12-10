<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use App\Models\User;
use illuminate\Pagination\paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
    public function boot() //: void
    {
        //
        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
