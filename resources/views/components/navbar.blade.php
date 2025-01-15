<!-- Navigation Component -->
<nav class="bg-base-white shadow-md font-primary sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="h-12">
                    <img src="{{ asset('images/QWords.png') }}" alt="QWords Logo" class="h-full w-auto">
                </a>
            </div>

            <!-- Navigation Links - Hidden on Mobile -->
            <div class="hidden lg:flex items-center">
                <div class="flex items-center space-x-6">
                    <!-- All buttons with consistent styling -->
                    <a href="#products" class="px-4 py-2 text-body font-medium text-text-secondary hover:text-brand transition-colors">Products</a>
                    <a href="#partners" class="px-4 py-2 text-body font-medium text-text-secondary hover:text-brand transition-colors">Partners</a>
                    <a href="#testimonials" class="px-4 py-2 text-body font-medium text-text-secondary hover:text-brand transition-colors">Testimonials</a>
                    <a href="#faq" class="px-4 py-2 text-body font-medium text-text-secondary hover:text-brand transition-colors">FAQ</a>
                    <a href="#contact" class="px-4 py-2 text-body font-medium text-text-secondary hover:text-brand transition-colors">Contact</a>

                    <!-- Auth Buttons with consistent height -->
                    <a href="#" class="px-4 py-2 text-brand hover:text-brand-dark transition-colors">Login</a>
                    <a href="#" class="px-4 py-2 bg-brand text-white rounded-lg hover:bg-brand-dark transition-colors">Register</a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-text-primary focus:outline-none focus:text-brand transition-colors" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden bg-base-offwhite" id="mobile-menu">
        <!-- Mobile Navigation Links - Consistent padding and styling -->
        <div class="py-2">
            <a href="#products" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Products</a>
            <a href="#partners" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Partners</a>
            <a href="#testimonials" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Testimonials</a>
            <a href="#faq" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">FAQ</a>
            <a href="#contact" class="block px-4 py-2 text-body font-medium text-text-secondary hover:bg-brand-gradient hover:text-base-white transition-colors">Contact</a>
        </div>

        <!-- Mobile Auth Buttons -->
        <div class="p-4 space-y-2">
            <a href="#" class="block w-full px-4 py-2 text-center text-brand border border-brand rounded-lg hover:bg-brand hover:text-white transition-colors">Login</a>
            <a href="#" class="block w-full px-4 py-2 text-center bg-brand text-white rounded-lg hover:bg-brand-dark transition-colors">Register</a>
        </div>
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
</script>
@endpush
