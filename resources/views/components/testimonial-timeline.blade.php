@props(['testimonials'])

<div class="relative">
    <!-- Timeline Line -->
    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-brand/20 via-brand to-brand/20"></div>

    <div class="relative">
        @foreach($testimonials as $index => $testimonial)
            <div class="mb-16 relative">
                <!-- Timeline Dot -->
                <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-brand rounded-full border-4 border-white shadow-lg"></div>

                <!-- Timeline Date -->
                <div class="absolute left-1/2 transform -translate-x-1/2 -top-8">
                    <span class="bg-brand text-white px-4 py-1 rounded-full text-sm font-medium">
                        {{ \Carbon\Carbon::parse($testimonial->testimonial_date)->format('F Y') }}
                    </span>
                </div>

                <!-- Content Card -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 relative {{ $index % 2 == 0 ? 'lg:pr-32' : 'lg:pl-32' }}">
                    <div class="{{ $index % 2 == 0 ? 'lg:col-start-1' : 'lg:col-start-2' }}">
                        <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                            <!-- Profile Section -->
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-4 bg-gray-100">
                                    <img src="{{ asset($testimonial->image) }}"
                                         alt="{{ $testimonial->name }}"
                                         class="w-full h-full object-cover"
                                         onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($testimonial->name) }}&background=random'">
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900">{{ $testimonial->name }}</h4>
                                    <p class="text-sm text-gray-600">{{ $testimonial->position }} - {{ $testimonial->company }}</p>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="relative">
                                <svg class="absolute -top-4 -left-4 w-8 h-8 text-brand/20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <blockquote class="text-lg text-gray-700 italic mb-6 pl-6">
                                    "{{ $testimonial->content }}"
                                </blockquote>
                            </div>

                            <!-- Extended Quote -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <p class="text-gray-600">{{ $testimonial->quote }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('styles')
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>
@endpush

@push('scripts')
<script>
    // Add animation when cards come into view
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.mb-16').forEach(card => {
        observer.observe(card);
    });
</script>
@endpush
