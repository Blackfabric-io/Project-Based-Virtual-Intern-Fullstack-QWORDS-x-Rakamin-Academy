<!-- Navigation Component -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">QWords</a>
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600">Products</a>
            <a href="{{ route('services.index') }}" class="text-gray-700 hover:text-blue-600">Services</a>
            <a href="{{ route('contact.index') }}" class="text-gray-700 hover:text-blue-600">Contact</a>
            <a href="{{ route('signup') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Sign Up</a>
        </div>
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden hidden" id="mobile-menu">
        <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
        <a href="{{ route('products.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Products</a>
        <a href="{{ route('services.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
        <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
        <a href="{{ route('signup') }}" class="block px-4 py-2 text-white bg-blue-600 hover:bg-blue-700">Sign Up</a>
    </div>
</nav>
