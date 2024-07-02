<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path() . '/Helpers/functions.php';

        // Always redirect to https.
        if($this->app->environment() === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }

        \Validator::extend('current_password', function ($attribute, $value, $parameters, $validator) {
            $user = \Auth::user();

            return $user && \Hash::check($value, $user->password);
        });

        \Validator::extend('same_password', function ($attribute, $value, $parameters, $validator) {
            $user = \Auth::user();

            return $user && !\Hash::check($value, $user->password);
        });

        // if(config('app.env')==='local'){
        //     URL::forceScheme(('https'));
        // }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}