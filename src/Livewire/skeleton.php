<?php

namespace MrShaneBarron\Skeleton\Livewire;

use Livewire\Component;

class Skeleton extends Component
{
    public string $type = 'text';
    public int $lines = 3;
    public string $size = 'md';
    public bool $animate = true;

    public function mount(
        string $type = 'text',
        int $lines = 3,
        string $size = 'md',
        bool $animate = true
    ): void {
        $this->type = $type;
        $this->lines = $lines;
        $this->size = $size;
        $this->animate = $animate;
    }

    public function render()
    {
        return view('ld-skeleton::livewire.skeleton');
    }
}
