<?php namespace Sups;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Sups\Repo\v1\User\EloquentUserRepository;

class SupsServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $this->app->bind('Sups\Repo\v1\User\UserInterface', function($app) {
            return new EloquentUserRepository(new \User);
        });
    }

}
 