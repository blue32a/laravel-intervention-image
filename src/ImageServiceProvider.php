<?php

declare(strict_types=1);

namespace Blue32a\Laravel\Intervention\Image;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\ImageManager;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ImageManager::class, function () {
            return new ImageManager(config('image.driver'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/image.php' => config_path('image.php'),
        ], 'intervention-image');
    }
}
