<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo;
class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Repo\ServInterface::class, Repo\ServRepo::class);
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
