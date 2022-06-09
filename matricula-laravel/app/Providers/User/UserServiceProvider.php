<?php

namespace App\Providers\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->bind(
                'App\Repository\Contracts\User\UserRepositoryInterface',
                'App\Repository\User\UserRepository'
            );
    }

    public function provides()
    {
        return [
            'App\Repository\Contracts\User\UserRepositoryInterface',
            'App\Repository\User\UserRepository'
        ];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
