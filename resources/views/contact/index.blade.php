@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-8">Contact Us</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="max-w-lg">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" name="name" id="name" required
                           class="w-full px-4 py-2 border rounded @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" name="email" id="email" required
                           class="w-full px-4 py-2 border rounded @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="message" class="block mb-2">Message</label>
                    <textarea name="message" id="message" required
                              class="w-full px-4 py-2 border rounded @error('message') border-red-500 @enderror"
                              rows="4">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </div>
    </div>
@endsection
