<?php

namespace MrShaneBarron\skeleton;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\skeleton\Livewire\skeleton;
use MrShaneBarron\skeleton\View\Components\skeleton as Bladeskeleton;
use Livewire\Livewire;

class skeletonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-skeleton.php', 'ld-skeleton');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-skeleton');

        Livewire::component('ld-skeleton', skeleton::class);

        $this->loadViewComponentsAs('ld', [
            Bladeskeleton::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-skeleton.php' => config_path('ld-skeleton.php'),
            ], 'ld-skeleton-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-skeleton'),
            ], 'ld-skeleton-views');
        }
    }
}
