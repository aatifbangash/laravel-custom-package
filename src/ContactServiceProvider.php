<?php

namespace Bitfumes\Contact;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Bitfumes\Contact\Http\Middleware\MyMiddleware;

class ContactServiceProvider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $router->middlewareGroup('MyMiddleware', [MyMiddleware::class]);
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php',
            'contact'
        );
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);
    }

    public function register()
    {
    }
}
