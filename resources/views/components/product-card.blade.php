<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center mb-12">Our Products</h2>
        <div class="flex flex-wrap -mx-4">
            @foreach($products as $product)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                            <div class="mb-4">
                                <span class="text-2xl font-bold text-blue-600">${{ number_format($product->price, 2) }}</span>
                            </div>
                            <a href="{{ route('products.show', $product->id) }}"
                               class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
