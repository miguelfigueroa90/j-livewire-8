<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
        <nav class="bg-blue-800 py-2">
            <a href="{{ route('home') }}">
                <img
                    src="{{ asset('images/isotipo-platzi.png') }}"
                    class="h-8 mx-auto">
            </a>
        </nav>
    </header>

    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                Login
            </a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                Register
            </a>
        @endif
        <span class="ml-4 text-sm text-gray-700">
            Do you want to learn how to create this page?
            <a
                href="https://platzi.com/r/miguelf90/"
                class="underline"
                target="blank">
                Subscribe at Platzi now!
            </a>
        </span>
    </footer>
</body>

</html>
