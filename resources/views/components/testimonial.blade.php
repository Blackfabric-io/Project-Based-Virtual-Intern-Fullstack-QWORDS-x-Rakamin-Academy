<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center mb-12">What Our Customers Say</h2>
        <div class="flex flex-wrap -mx-4">
            @foreach($testimonials as $testimonial)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <p class="text-gray-700 italic mb-4">"{{ $testimonial->message }}"</p>
                        <div class="flex items-center">
                            <img src="{{ asset($testimonial->user->avatar) }}" alt="{{ $testimonial->user->name }}" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-lg font-semibold">{{ $testimonial->user->name }}</h4>
                                <span class="text-gray-500">{{ $testimonial->user->position }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
