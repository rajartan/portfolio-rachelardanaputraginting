<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rachel Ardana Putra Ginting</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- sidebar --}}
    <section class="md:bg-gradient-to-b from-violet-600 to-violet-400" id="section">
        <div class="container realtive">
            <div class="flex flex-wrap md:min-h-screen justify-center items-center">
                @include('layouts.sidebar')
                @include('layouts.profile')
                @yield('content')
            </div>
        </div>
        </div>
    </section>
    {{-- akhir sidebar --}}
</body>

</html>
