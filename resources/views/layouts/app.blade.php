<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="w-full bg-gray-100">
    
    @if (!isset($hideNavbar) || !$hideNavbar)
        <nav>
            @yield('navbar')
        </nav>
    @endif

    <main class="min-h-screen flex items-center justify-center">
        {{-- Konten utama akan muncul di sini --}}
        @yield('content')
    </main>

    @if (!isset($hideFooter) || !$hideFooter)
        <footer>
            @yield('footer')
            @include('components.footer')
        </footer>
    @endif

</body>
</html>
