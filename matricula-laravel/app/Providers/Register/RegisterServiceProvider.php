<?php

namespace App\Providers\Register;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider implements DeferrableProvider
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
                'App\Repository\Contracts\Register\RegisterRepositoryInterface',
                'App\Repository\Register\RegisterRepository'
            );
    }

    public function provides()
    {
        return [
            'App\Repository\Contracts\Register\RegisterRepositoryInterface',
            'App\Repository\Register\RegisterRepository'
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
