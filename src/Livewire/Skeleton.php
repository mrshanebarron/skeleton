<?php

namespace MrShaneBarron\Skeleton\Livewire;

use Livewire\Component;

class Skeleton extends Component
{
    public string $variant = 'text';
    public ?string $width = null;
    public ?string $height = null;
    public bool $animate = true;
    public int $count = 1;

    public function mount(string $variant = 'text', ?string $width = null, ?string $height = null, bool $animate = true, int $count = 1): void
    {
        $this->variant = $variant;
        $this->width = $width;
        $this->height = $height;
        $this->animate = $animate;
        $this->count = $count;
    }

    public function render()
    {
        return view('sb-skeleton::livewire.skeleton');
    }
}
