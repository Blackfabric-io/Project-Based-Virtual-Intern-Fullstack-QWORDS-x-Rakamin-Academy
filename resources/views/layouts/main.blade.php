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

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'QWords') }}">
    <meta property="og:title" content="@yield('title', config('app.name', 'QWords Landing Page')) | Cloud Hosting Indonesia">
    <meta property="og:description" content="@yield('meta_description', 'QWords provides top-notch cloud hosting solutions with 24/7 support.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@QWordsHosting">
    <meta name="twitter:title" content="@yield('title', config('app.name', 'QWords Landing Page'))">
    <meta name="twitter:description" content="@yield('meta_description', 'QWords provides top-notch cloud hosting solutions with 24/7 support.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-card.jpg'))">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Structured Data / JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ config('app.name', 'QWords') }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "sameAs": [
            "https://facebook.com/qwords",
            "https://twitter.com/qwords",
            "https://instagram.com/qwords"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-804-1-808-888",
            "contactType": "customer service",
            "availableLanguage": ["English", "Indonesian"]
        }
    }
    </script>

    <!-- Asset Loading (CSS) -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('styles')
</head>
<body itemscope itemtype="https://schema.org/WebPage">
    <!-- Header/Navbar -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4">
        <!-- Breadcrumbs for SEO -->
        @yield('breadcrumbs')

        <!-- Main Content Area -->
        <article>
            @hasSection('page_heading')
                <h1 class="main-heading">@yield('page_heading')</h1>
            @endif

            @yield('content')
        </article>
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>

    <!-- Essential Scripts -->
    @if(config('app.env') === 'local')
        <script src="{{ asset('js/app.js') }}"></script>
    @else
        <script src="{{ mix('js/app.js') }}" defer></script>
    @endif

    <!-- Feature Scripts -->
    <script src="{{ asset('js/smooth-scroll.js') }}" defer></script>
    <script src="{{ asset('js/form-validation.js') }}" defer></script>
    <script src="{{ asset('js/pricing-calculator.js') }}" defer></script>
    <script src="{{ asset('js/mobile-menu-toggle.js') }}" defer></script>
    <script src="{{ asset('js/lazy-loading.js') }}" defer></script>

    <!-- Asset Loading (JS) -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Google Analytics or Tag Manager -->
    @if(config('app.env') === 'production')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR-GA-ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'YOUR-GA-ID');
        </script>
    @endif

    @stack('scripts')
</body>
</html>
