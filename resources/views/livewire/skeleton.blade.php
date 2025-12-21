@php
$variants = [
    'text' => 'height: 16px; border-radius: 4px;',
    'title' => 'height: 24px; border-radius: 4px; width: 75%;',
    'avatar' => 'width: 40px; height: 40px; border-radius: 50%;',
    'thumbnail' => 'width: 80px; height: 80px; border-radius: 4px;',
    'card' => 'height: 128px; border-radius: 8px;',
    'button' => 'height: 40px; width: 96px; border-radius: 8px;',
];
$baseStyle = $variants[$this->variant] ?? $variants['text'];
$widthStyle = $this->width ? "width: {$this->width};" : '';
$heightStyle = $this->height ? "height: {$this->height};" : '';
$animationStyle = $this->animate ? 'animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;' : '';
@endphp

<div style="display: flex; flex-direction: column; gap: 8px;">
    @if($this->animate)
        <style>@keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }</style>
    @endif
    @for($i = 0; $i < $this->count; $i++)
        <div style="background: #e5e7eb; {{ $baseStyle }} {{ $widthStyle }} {{ $heightStyle }} {{ $animationStyle }}"></div>
    @endfor
</div>
