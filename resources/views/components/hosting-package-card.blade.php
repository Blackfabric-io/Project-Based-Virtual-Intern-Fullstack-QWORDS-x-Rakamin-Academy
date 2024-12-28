<div class="bg-white rounded-lg shadow-lg p-6">
    <h3 class="text-xl font-semibold mb-4">{{ $package->name }}</h3>
    <p class="text-gray-600 mb-6">{{ $package->description }}</p>
    <div class="mb-6">
        <span class="text-3xl font-bold text-blue-600">{{ $package->price }}</span>
        <span class="text-gray-500">/month</span>
    </div>
    <ul class="mb-6">
        @foreach($package->features as $feature)
            <li class="flex items-center mb-2">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1,0,0,0-1.414 0L8 12.586 4.707 9.293a1 1,0,1,0-1.414 1.414l4 4a1 1,0,0,0,1.414 0l8-8a1 1,0,0,0,0-1.414z" clip-rule="evenodd" />
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('signup') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Choose Plan</a>
</div>
