<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">QWords</a>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a></li>
                <li><a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600">Products</a></li>
                <li><a href="{{ route('services.index') }}" class="text-gray-700 hover:text-blue-600">Services</a></li>
                <li><a href="{{ route('contact.index') }}" class="text-gray-700 hover:text-blue-600">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
