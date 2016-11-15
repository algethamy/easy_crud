<?php

namespace EFrontSA\EasyCRUD;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/lang/ar/easy_curd.php' => base_path('resources/lang/ar/easy_curd.php'),
            __DIR__ . '/../resources/lang/en/easy_curd.php' => base_path('resources/lang/en/easy_curd.php'),
        ], 'resource');
    }
}