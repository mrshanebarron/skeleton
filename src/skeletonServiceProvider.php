<?php

namespace MrShaneBarron\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('ld-skeleton', Livewire\Skeleton::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-skeleton');
    }
}
