<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\User\Models\User;
use App\Domain\User\Policies\UserPolicy;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $policies = [
    User::class => UserPolicy::class,
];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
