<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trust Mountain Academy</title>

<link rel="icon" href="{{asset('images/logo.png')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.14.8/cdn.js" ></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
       
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       @include('components.frontend.navbar')

      @yield('home_content')
      
       @include('components.frontend.footer')
    </body>
</html>
