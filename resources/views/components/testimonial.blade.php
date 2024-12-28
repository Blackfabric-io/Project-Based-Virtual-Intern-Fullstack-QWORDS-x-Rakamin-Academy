@props(['testimonial'])

<div class="bg-white rounded-lg shadow-md p-6">
    @if($testimonial->image)
        <div class="mb-4">
            <img src="{{ asset($testimonial->image) }}"
                 alt="{{ $testimonial->name }}"
                 class="w-16 h-16 rounded-full object-cover mx-auto">
        </div>
    @endif

    <blockquote class="text-gray-600 text-sm mb-4">
        "{{ $testimonial->content }}"
    </blockquote>

    <div class="text-center">
        <div class="font-semibold text-gray-900">{{ $testimonial->name }}</div>
        @if($testimonial->position || $testimonial->company)
            <div class="text-sm text-gray-600">
                {{ $testimonial->position }}
                @if($testimonial->position && $testimonial->company), @endif
                {{ $testimonial->company }}
            </div>
        @endif
    </div>

    @if($testimonial->video_url)
        <div class="mt-4 text-center">
            <a href="{{ $testimonial->video_url }}"
               target="_blank"
               class="text-sm text-orange-500 hover:text-orange-600 inline-flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Lihat Video
            </a>
        </div>
    @endif
</div>
