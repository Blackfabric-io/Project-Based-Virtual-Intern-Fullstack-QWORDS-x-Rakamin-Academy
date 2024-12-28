@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            @if($product === 'cloud-hosting')
                <h1 class="text-4xl font-bold mb-8">Cloud Hosting</h1>
                <div class="mb-12">
                    <h2 class="text-2xl font-semibold mb-4">Features</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>High Performance SSD Storage</strong>
                                <p class="text-gray-600">Lightning-fast storage for your applications</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>Unlimited Bandwidth</strong>
                                <p class="text-gray-600">No traffic limitations for your website</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>24/7 Technical Support</strong>
                                <p class="text-gray-600">Expert assistance whenever you need it</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="pricing-section">
                    <h2 class="text-2xl font-semibold mb-4">Price</h2>
                    <div class="bg-white border rounded-lg p-6">
                        <div class="text-3xl font-bold mb-2">Rp 99.000<span class="text-lg font-normal">/month</span></div>
                        <p class="text-gray-600 mb-4">Starting from</p>
                        <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Get Started
                        </button>
                    </div>
                </div>
            @else
                <h1 class="text-4xl font-bold mb-8">VPS</h1>
                <div class="mb-12">
                    <h2 class="text-2xl font-semibold mb-4">Features</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>Full Root Access</strong>
                                <p class="text-gray-600">Complete control over your server</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>Guaranteed Resources</strong>
                                <p class="text-gray-600">Dedicated CPU and RAM allocation</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <div>
                                <strong>Custom Configuration</strong>
                                <p class="text-gray-600">Flexibility to configure your server</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="pricing-section">
                    <h2 class="text-2xl font-semibold mb-4">Price</h2>
                    <div class="bg-white border rounded-lg p-6">
                        <div class="text-3xl font-bold mb-2">Rp 199.000<span class="text-lg font-normal">/month</span></div>
                        <p class="text-gray-600 mb-4">Starting from</p>
                        <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Get Started
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
