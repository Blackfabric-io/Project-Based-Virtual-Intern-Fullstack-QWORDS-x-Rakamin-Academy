<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>@yield('title', config('app.name', 'QWords Landing Page')) | Cloud Hosting Indonesia</title>
    <meta name="description" content="@yield('meta_description', 'QWords - Leading Cloud Hosting Provider in Indonesia offering reliable web hosting, VPS, dedicated servers with 24/7 support and guaranteed uptime.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Cloud Hosting Indonesia, Web Hosting, VPS Hosting, Dedicated Server, Domain Name, SSL Certificate')">
    <meta name="author" content="QWords Company International">
    <meta name="robots" content="index, follow">
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Additional Styles -->
    @stack('styles')
</head>
<body class="font-primary text-text-primary antialiased">
    <!-- Header -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Main Content -->
    <main>
        <!-- Breadcrumbs for SEO -->
        @hasSection('breadcrumbs')
            <div class="container mx-auto px-4">
                @yield('breadcrumbs')
            </div>
        @endif

        <!-- Page Heading -->
        @hasSection('page_heading')
            <div class="container mx-auto px-4">
                <h1 class="text-section font-secondary font-bold">@yield('page_heading')</h1>
            </div>
        @endif

        <!-- Main Content Area -->
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('scripts')

    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
