<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - QWords</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-6xl font-bold mb-4">404</h1>
            <p class="text-xl mb-8">Oops! The page you're looking for doesn't exist.</p>
            <a href="{{ route('landing.page') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">Go Back Home</a>
        </div>
    </div>
</body>
</html>
