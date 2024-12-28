<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - QWords</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-primary text-text-primary">
    <div class="flex items-center justify-center min-h-screen bg-base-offwhite">
        <div class="text-center px-4">
            <h1 class="text-hero font-extrabold mb-4 bg-brand-gradient text-transparent bg-clip-text">404</h1>
            <p class="text-subsection font-regular mb-8 text-text-secondary">Oops! The page you're looking for doesn't exist.</p>
            <a href="{{ route('home') }}"
               class="inline-block bg-brand-gradient text-base-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                Go Back Home
            </a>
        </div>
    </div>
</body>
</html>
