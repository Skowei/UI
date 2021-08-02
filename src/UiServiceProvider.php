<?php

namespace Skowei\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app/providers' =>  base_path('app/Providers/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/base' =>  base_path('/'),
        ], 'sk-ui-blade');

        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app/providers' =>  base_path('app/Providers/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/base' =>  base_path('/'),
        ], 'sk-ui-vue');

        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app/providers' =>  base_path('app/Providers/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/base' =>  base_path('/'),
        ], 'sk-ui-react');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\InstallCommand::class,
                Commands\UpdateCommand::class,
            ]);
        }
    }
}
