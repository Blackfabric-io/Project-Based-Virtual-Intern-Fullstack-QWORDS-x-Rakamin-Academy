@props(['product', 'index'])

<div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105 h-full flex flex-col relative">
    @if($index === 1)
        <div class="absolute top-0 right-0">
            <div class="bg-brand text-white px-4 py-1 rounded-bl-lg font-medium text-sm">
                Popular Choice
            </div>
        </div>
    @endif

    <div class="p-6 flex-1 flex flex-col">
        <div class="pt-4 mb-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">
                {{ $product->name }}
            </h3>

            <p class="text-gray-600">
                {{ $product->description }}
            </p>
        </div>

        <div class="mb-8">
            <div class="flex flex-col items-start">
                @if($product->discount_price)
                    <div class="text-2xl font-bold text-gray-900 mb-1">
                        {{ $product->formatted_discount_price }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm line-through text-gray-500">
                            {{ $product->formatted_price }}
                        </span>
                        <span class="text-sm font-semibold text-green-600">
                            Save {{ $product->discount_percentage }}%
                        </span>
                    </div>
                @else
                    <div class="text-2xl font-bold text-gray-900 mb-1">
                        {{ $product->formatted_price }}
                    </div>
                @endif
                <div class="text-sm text-gray-600 mt-1">/month</div>
            </div>
        </div>

        <div class="flex-1">
            <ul class="space-y-3 mb-8">
                @foreach($product->features as $feature)
                    <li class="flex items-start text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-auto">
            <a href="{{ route('products.show', $product->slug) }}"
               class="block w-full text-center bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors">
                Pilih Paket
            </a>
        </div>
    </div>
</div>
