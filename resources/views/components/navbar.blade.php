<!-- Navigation Component -->
<nav class="bg-base-white shadow-md font-primary">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo: Plus Jakarta Sans Extra Bold -->
        <a href="{{ route('home') }}" class="text-subsection font-extrabold text-brand">QWords</a>

        <!-- Navigation: Plus Jakarta Sans Medium -->
        <div class="hidden md:flex space-x-6">
            <a href="#products" class="text-body font-medium text-text-secondary hover:text-brand transition-colors">Products</a>
            <a href="#partners" class="text-body font-medium text-text-secondary hover:text-brand transition-colors">Partners</a>
            <a href="#testimonials" class="text-body font-medium text-text-secondary hover:text-brand transition-colors">Testimonials</a>
            <a href="#faq" class="text-body font-medium text-text-secondary hover:text-brand transition-colors">FAQ</a>
            <a href="#contact" class="text-body font-medium text-text-secondary hover:text-brand transition-colors">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-text-primary focus:outline-none focus:text-brand transition-colors" id="mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-base-offwhite" id="mobile-menu">
        <a href="#products" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Products</a>
        <a href="#partners" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Partners</a>
        <a href="#testimonials" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Testimonials</a>
        <a href="#faq" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">FAQ</a>
        <a href="#contact" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Contact</a>
    </div>
</nav>

@push('scripts')
<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpush
