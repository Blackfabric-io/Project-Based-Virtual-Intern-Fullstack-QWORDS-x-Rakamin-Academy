<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Quick Links -->
            <div class="mb-6 md:mb-0">
                <h4 class="font-semibold mb-2">Quick Links</h4>
                <ul>
                    <li><a href="{{ route('landing.page') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:underline">Products</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('contact.show') }}" class="hover:underline">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="mb-6 md:mb-0">
                <h4 class="font-semibold mb-2">Contact Us</h4>
                <p>Phone: (021) 3970-8800</p>
                <p>Email: <a href="mailto:info@qwords.com" class="hover:underline">info@qwords.com</a></p>
                <p>Address:</p>
                <p>Jl. Blotan no. 18, Kaven Wedomartani, Ngemplak, Sleman, Yogyakarta 55584</p>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="font-semibold mb-2">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-8 text-center text-gray-500">
            &copy; {{ date('Y') }} PT. Qwords Company International. All rights reserved.
        </div>
    </div>
</footer>
