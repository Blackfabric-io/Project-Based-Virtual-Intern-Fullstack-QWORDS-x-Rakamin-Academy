@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-8">Our Products</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cloud Hosting -->
            <div class="product-card border rounded-lg p-6 shadow-sm">
                <h2 class="text-2xl font-semibold mb-4">Cloud Hosting</h2>
                <p class="text-gray-600 mb-4">High-performance cloud hosting solution for your applications</p>
                <ul class="mb-6 space-y-2">
                    <li>✓ SSD Storage</li>
                    <li>✓ Unlimited Bandwidth</li>
                    <li>✓ 24/7 Support</li>
                </ul>
                <a href="{{ route('products.show', 'cloud-hosting') }}"
                   class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Learn More
                </a>
            </div>

            <!-- VPS -->
            <div class="product-card border rounded-lg p-6 shadow-sm">
                <h2 class="text-2xl font-semibold mb-4">VPS</h2>
                <p class="text-gray-600 mb-4">Virtual Private Server with dedicated resources</p>
                <ul class="mb-6 space-y-2">
                    <li>✓ Full Root Access</li>
                    <li>✓ Guaranteed Resources</li>
                    <li>✓ Custom Configuration</li>
                </ul>
                <a href="{{ route('products.show', 'vps') }}"
                   class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Learn More
                </a>
            </div>
        </div>
    </div>
@endsection
