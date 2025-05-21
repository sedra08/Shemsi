<?php

/* namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //
    }

    public function boot()
{
    $this->registerPolicies();

    Gate::before(function ($user, $ability) {
        return $user->hasRole('super_admin') ? true : null;
    });
}
}
 */