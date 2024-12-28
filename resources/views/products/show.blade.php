@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Product Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-text-primary mb-4">{{ $product->name }}</h1>
            <p class="text-text-secondary text-lg">{{ $product->description }}</p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 gap-6 mb-12">
            @foreach($product->features as $feature)
                <div class="flex items-start">
                    <span class="text-accent-green mr-2">✓</span>
                    <div>
                        <h3 class="font-semibold text-text-primary mb-1">{{ $feature->name }}</h3>
                        <p class="text-text-secondary">{{ $feature->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pricing and CTA -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Pricing Card -->
            <div class="bg-base-white border border-text-tertiary rounded-lg p-6">
                <h2 class="text-2xl font-bold text-text-primary mb-4">Pricing</h2>
                <div class="mb-6">
                    <p class="text-text-secondary mb-4">Starting from</p>
                    <div class="text-3xl font-bold text-brand">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                        <span class="text-lg font-normal text-text-tertiary">/mo</span>
                    </div>
                </div>
                <button class="w-full bg-brand text-base-white px-6 py-3 rounded-lg hover:bg-brand-light transition-colors">
                    Choose Plan
                </button>
            </div>

            <!-- Contact Sales -->
            <div class="bg-base-offwhite rounded-lg p-6">
                <h2 class="text-2xl font-bold text-text-primary mb-4">Need Help?</h2>
                <p class="text-text-secondary mb-4">Our team is ready to assist you in choosing the right plan for your needs.</p>
                <button
                    class="w-full border-2 border-brand text-brand px-6 py-3 rounded-lg hover:bg-brand hover:text-base-white transition-colors">
                    Contact Sales
                </button>
            </div>
        </div>

        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-text-primary mb-8">Related Products</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    @foreach($relatedProducts as $relatedProduct)
                        <div class="bg-base-white border border-text-tertiary rounded-lg p-4">
                            <h3 class="font-semibold text-text-primary mb-2">{{ $relatedProduct->name }}</h3>
                            <p class="text-text-secondary text-sm mb-3">{{ $relatedProduct->description }}</p>
                            <div class="text-brand font-bold mb-3">
                                Rp {{ number_format($relatedProduct->price, 0, ',', '.') }}/mo
                            </div>
                            <a href="{{ route('products.show', $relatedProduct->id) }}"
                               class="text-brand hover:text-brand-light transition-colors text-sm">
                                Learn More →
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
