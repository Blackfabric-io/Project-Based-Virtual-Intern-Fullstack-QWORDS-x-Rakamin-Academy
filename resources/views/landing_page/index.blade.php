@extends('layouts.main')

@section('title', 'Cloud Web Hosting Indonesia - Domain & Hosting Terbaik')
@section('meta_description', 'QWords - Leading Cloud Hosting Provider in Indonesia offering reliable web hosting, VPS, dedicated servers with 24/7 support and guaranteed uptime.')
@section('meta_keywords', 'Cloud Hosting Indonesia, Web Hosting, VPS Hosting, Dedicated Server, Domain Name, SSL Certificate')

@section('content')
    <!-- Hero Section -->
    <x-hero />

    <!-- Featured Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Paket Hosting Terbaik</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($products as $index => $product)
                    <x-product-card :product="$product" :index="$index" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Apa Kata Mereka?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                    <x-testimonial :testimonial="$testimonial" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Partner Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                @foreach($partners as $partner)
                    <x-partner-logo :partner="$partner" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan yang Sering Diajukan</h2>
            <div class="max-w-3xl mx-auto">
                <x-f-a-q-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Metode Pembayaran</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-8 gap-4 items-center justify-center">
                @foreach($paymentMethods as $method)
                    <div class="flex items-center justify-center p-4">
                        <img src="{{ asset($method->logo) }}" alt="{{ $method->name }}" class="h-12 object-contain">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endpush
