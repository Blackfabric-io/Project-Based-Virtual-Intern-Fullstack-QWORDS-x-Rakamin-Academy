<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($page->featured_image)
                    <div class="w-full h-64 md:h-96 overflow-hidden">
                        <img src="{{ Storage::url($page->featured_image) }}"
                             alt="{{ $page->title }}"
                             class="w-full h-full object-cover">
                    </div>
                @endif

                <div class="p-6 text-gray-900">
                    <div class="prose max-w-none">
                        {!! $page->content !!}
                    </div>

                    @if($page->sections->count() > 0)
                        <div class="mt-8 space-y-8">
                            @foreach($page->sections as $section)
                                <div class="border-t pt-8">
                                    <h2 class="text-2xl font-bold mb-4">{{ $section->title }}</h2>
                                    <div class="prose max-w-none">
                                        {!! $section->content !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            @if($page->children->count() > 0)
                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Related Pages</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($page->children as $childPage)
                            <a href="{{ route('page.show', $childPage->slug) }}"
                               class="block bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                                @if($childPage->featured_image)
                                    <div class="w-full h-48 rounded-t-lg overflow-hidden">
                                        <img src="{{ Storage::url($childPage->featured_image) }}"
                                             alt="{{ $childPage->title }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                @endif
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold mb-2">{{ $childPage->title }}</h3>
                                    <p class="text-gray-600 line-clamp-3">
                                        {{ $childPage->meta_description }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
