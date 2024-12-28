<div class="loading-container">
    @switch($type)
        @case('spinner')
            <div class="spinner
                {{ $size === 'sm' ? 'h-4 w-4' : ($size === 'lg' ? 'h-12 w-12' : 'h-8 w-8') }}
                border-t-2 border-b-2 border-{{ $color }}-500
                animate-spin rounded-full">
            </div>
            @break

        @case('dots')
            <div class="dots-loading">
                <span class="bg-{{ $color }}-500"></span>
                <span class="bg-{{ $color }}-500"></span>
                <span class="bg-{{ $color }}-500"></span>
            </div>
            @break
    @endswitch

    @if($message)
        <p class="text-sm text-gray-600 mt-2">{{ $message }}</p>
    @endif
</div>
