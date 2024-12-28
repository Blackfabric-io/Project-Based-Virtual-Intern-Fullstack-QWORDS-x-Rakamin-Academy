@extends('layouts.main')

@section('content')
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">Compare Hosting Plans</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-center mb-4">{{ $product->name }}</h2>
                        <div class="text-center mb-6">
                            <div class="text-gray-500 text-sm">Starting from</div>
                            <div class="text-3xl font-bold text-blue-600">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                                <span class="text-base font-normal text-gray-500">/mo</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            @foreach($product->features()->ordered()->get() as $feature)
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <div>
                                        <span class="font-medium">{{ $feature->name }}</span>
                                        <p class="text-gray-600 text-sm">{{ $feature->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8">
                            <a href="{{ route('products.show', $product) }}"
                               class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                Choose Plan
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-4">Need help choosing the right plan?</p>
            <a href="#contact"
               class="inline-block bg-white border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-50 transition-colors">
                Contact Sales
            </a>
        </div>
    </div>
</div>
@endsection
