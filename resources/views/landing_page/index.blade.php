@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4">
        <div class="hero-section py-16">
            <h1 class="text-4xl font-bold mb-4">Welcome to Qwords</h1>
            <p class="text-xl mb-8">Your Trusted Hosting & Cloud Provider</p>
        </div>

        <section class="products-section py-12">
            <h2 class="text-3xl font-semibold mb-8">Hosting & Cloud</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product cards will be rendered here -->
            </div>
        </section>

        <section class="contact-section py-12" id="contact">
            <h2 class="text-3xl font-semibold mb-8">Contact</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="max-w-lg">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" name="name" id="name" required class="w-full px-4 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2">Message</label>
                    <textarea name="message" id="message" required class="w-full px-4 py-2 border rounded" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </section>
    </div>
@endsection
