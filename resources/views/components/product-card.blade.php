@props(['product'])

<div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            {{ $product->name }}
        </h3>

        <p class="text-gray-600 mb-4">
            {{ $product->description }}
        </p>

        <div class="mb-6">
            @if($product->discount_price)
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-lg font-bold text-gray-900">
                        {{ $product->formatted_discount_price }}
                    </span>
                    <span class="text-sm line-through text-gray-500">
                        {{ $product->formatted_price }}
                    </span>
                    <span class="text-sm font-semibold text-green-600">
                        Save {{ $product->discount_percentage }}%
                    </span>
                </div>
            @else
                <div class="text-lg font-bold text-gray-900 mb-1">
                    {{ $product->formatted_price }}
                </div>
            @endif
            <div class="text-sm text-gray-600">/month</div>
        </div>

        <ul class="space-y-2 mb-6">
            @foreach($product->features as $feature)
                <li class="flex items-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>

        <a href="{{ route('products.show', $product->slug) }}"
           class="block w-full text-center bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors">
            Pilih Paket
        </a>
    </div>
</div>
