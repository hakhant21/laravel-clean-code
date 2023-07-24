<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Applications\Usecases\Product\Usecase;
use Domain\Applications\Interactors\Product\Interactor;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            Usecase::class,
            Interactor::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
