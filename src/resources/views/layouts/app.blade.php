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
    @livewireStyles

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<header class="fixed top-0 w-full p-6 bg-white flex items-center">
    <h1 class="text-4xl font-bold tracking-widest ml-8">Atte</h1>
    <div class="flex ml-auto">
        <a href="/dashboard" class="block font-semibold">ホーム</a>
        <a href="/history" class="block ml-12 font-semibold">日付一覧</a>
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="block ml-12 font-semibold">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</header>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

<footer class="fixed bottom-0 w-full h-10 font-light bg-white flex items-center justify-center">
    <p>Atte,inc.</p>
</footer>

</html>
