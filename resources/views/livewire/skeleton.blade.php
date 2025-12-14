<div class="space-y-3">
    @if($type === 'avatar')
        <div @class(['rounded-full bg-gray-200', 'animate-pulse' => $animate, 'w-8 h-8' => $size === 'sm', 'w-12 h-12' => $size === 'md', 'w-16 h-16' => $size === 'lg'])></div>
    @elseif($type === 'image')
        <div @class(['rounded-lg bg-gray-200', 'animate-pulse' => $animate, 'h-32' => $size === 'sm', 'h-48' => $size === 'md', 'h-64' => $size === 'lg'])></div>
    @elseif($type === 'card')
        <div @class(['rounded-lg bg-gray-200 p-4', 'animate-pulse' => $animate])>
            <div class="h-4 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="space-y-2">
                <div class="h-3 bg-gray-300 rounded"></div>
                <div class="h-3 bg-gray-300 rounded w-5/6"></div>
            </div>
        </div>
    @else
        @for($i = 0; $i < $lines; $i++)
            <div
                @class([
                    'bg-gray-200 rounded',
                    'animate-pulse' => $animate,
                    'h-3' => $size === 'sm',
                    'h-4' => $size === 'md',
                    'h-5' => $size === 'lg',
                ])
                style="width: {{ $i === $lines - 1 ? rand(40, 70) : rand(80, 100) }}%"
            ></div>
        @endfor
    @endif
</div>
