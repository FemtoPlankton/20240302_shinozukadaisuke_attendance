<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<header class="fixed top-0 w-full p-6 bg-white">
    <h1 class="text-4xl font-bold tracking-widest ml-8">Atte</h1>
</header>

<body>
    <div class="font-sans w-full h-screen text-gray-900 antialiased bg-gray-100">
        {{ $slot }}
    </div>
</body>

<footer class="fixed bottom-0 w-full h-10 font-light bg-white flex justify-center items-center">
    <p>Atte,inc.</p>
</footer>

</html>
