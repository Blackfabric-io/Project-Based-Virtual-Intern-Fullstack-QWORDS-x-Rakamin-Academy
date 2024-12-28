@props(['service'])

<div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105 h-full flex flex-col">
    <div class="p-6 flex-1 flex flex-col">
        <div class="flex items-center mb-4">
            <div class="w-12 h-12 flex items-center justify-center bg-brand/10 rounded-lg mr-4">
                <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    @switch($service->icon)
                        @case('ssl')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            @break
                        @case('server')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            @break
                        @case('colocation')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            @break
                        @default
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    @endswitch
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900">{{ $service->name }}</h3>
                <p class="text-sm text-gray-600">{{ $service->description }}</p>
            </div>
        </div>

        <div class="flex-1">
            <div class="mb-4">
                <span class="text-lg font-bold text-gray-900 block">{{ $service->formatted_price }}</span>
                <span class="text-sm text-gray-600">{{ $service->billing_cycle }}</span>
            </div>
        </div>

        <div class="mt-auto">
            <a href="#" class="block w-full text-center bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors">
                Pilih Paket
            </a>
        </div>
    </div>
</div>
