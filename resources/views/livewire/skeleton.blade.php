@php
$variants = [
    'text' => 'h-4 rounded',
    'title' => 'h-6 rounded w-3/4',
    'avatar' => 'w-10 h-10 rounded-full',
    'thumbnail' => 'w-20 h-20 rounded',
    'card' => 'h-32 rounded-lg',
    'button' => 'h-10 w-24 rounded-lg',
];
$baseClass = $variants[$variant] ?? $variants['text'];
$widthStyle = $width ? "width: {$width};" : '';
$heightStyle = $height ? "height: {$height};" : '';
@endphp

<div class="space-y-2">
    @for($i = 0; $i < $count; $i++)
        <div
            class="bg-gray-200 {{ $baseClass }} {{ $animate ? 'animate-pulse' : '' }}"
            style="{{ $widthStyle }} {{ $heightStyle }}"
        ></div>
    @endfor
</div>
