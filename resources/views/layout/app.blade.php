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
        @yield('content')
    </main>

    @if (!isset($hideFooter) || !$hideFooter)
        <footer>
            @yield('footer')
            @include('components.footer')
        </footer>
    @endif

    {{-- Halaman Login --}}
    @section('login')
    <div class="bg-white shadow-lg rounded-lg flex w-3/4">
        <div class="bg-blue-500 text-white p-10 rounded-l-lg flex flex-col justify-center items-center w-1/2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 mb-4">
            <h2 class="text-2xl font-bold">SELAMAT DATANG</h2>
            <p>Di Sheets si teman tugasmu</p>
        </div>
        <div class="p-10 w-1/2">
            <h2 class="text-xl font-bold mb-4">Login User</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" class="w-full p-2 border rounded mb-4" placeholder="Email" required>
                <input type="password" name="password" class="w-full p-2 border rounded mb-4" placeholder="Password" required>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">LOGIN</button>
            </form>
        </div>
    </div>
    @show

    {{-- Halaman Register --}}
    @section('register')
    <div class="bg-white shadow-lg rounded-lg flex w-3/4">
        <div class="bg-blue-500 text-white p-10 rounded-l-lg flex flex-col justify-center items-center w-1/2">
            <img src="{{ asset('img/shet1.jpg') }}" alt="Logo" class="w-20 mb-4">
            <h2 class="text-2xl font-bold">SELAMAT DATANG</h2>
            <p>Di Sheets si teman tugasmu</p>
        </div>
        <div class="p-10 w-1/2">
            <h2 class="text-xl font-bold mb-4">Register User</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" class="w-full p-2 border rounded mb-4" placeholder="Username" required>
                <input type="email" name="email" class="w-full p-2 border rounded mb-4" placeholder="Email" required>
                <input type="password" name="password" class="w-full p-2 border rounded mb-4" placeholder="Password" required>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">REGISTER</button>
            </form>
        </div>
    </div>
    @show
</body>
</html>
