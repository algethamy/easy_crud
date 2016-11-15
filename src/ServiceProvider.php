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
            __DIR__ . '/../resource/lang/ar/easy_curd.php' => base_path('resource/lang/ar/easy_curd.php'),
            __DIR__ . '/../resource/lang/en/easy_curd.php' => base_path('resource/lang/en/easy_curd.php'),
        ], 'resource');
    }
}