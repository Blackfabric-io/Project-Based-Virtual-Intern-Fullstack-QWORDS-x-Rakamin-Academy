<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <p class="text-gray-700 italic mb-4">"{{ $testimonial->message }}"</p>
                    <img src="{{ asset($testimonial->user->avatar) }}" alt="{{ $testimonial->user->name }}" class="w-16 h-16 rounded-full mx-auto mb-4">
                    <h4 class="text-lg font-semibold">{{ $testimonial->user->name }}</h4>
                    <span class="text-gray-500">{{ $testimonial->user->position }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },
    });
</script>
