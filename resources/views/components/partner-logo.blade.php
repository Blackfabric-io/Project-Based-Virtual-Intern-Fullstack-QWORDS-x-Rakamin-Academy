@props(['partner'])

<div class="bg-white rounded-lg p-4 transition-transform duration-300 hover:-translate-y-1 h-full flex flex-col">
    <div class="flex-shrink-0 h-24 mb-4 flex items-center justify-center">
        <img src="{{ asset($partner->logo) }}"
             alt="{{ $partner->name }} logo"
             class="max-h-full w-auto object-contain"
             loading="lazy">
    </div>
    @if($partner->description)
        <div class="flex-grow flex items-center justify-center">
            <p class="text-gray-600 text-sm text-center line-clamp-2">{{ $partner->description }}</p>
        </div>
    @endif
</div>
