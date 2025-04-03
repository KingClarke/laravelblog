<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Blog') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-yellow-400 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-3xl font-bold uppercase">KooKee Blog</a>
            <nav class="flex items-center">
                <a href="/" class="px-4 py-2 hover:text-gray-800 transition">Home</a>
                <a href="/blog" class="px-4 py-2 hover:text-gray-800 transition">Blog</a>
                <a href="/about" class="px-4 py-2 hover:text-gray-800 transition">About</a>
                <a href="/contact" class="px-4 py-2 hover:text-gray-800 transition">Contact</a>
                <a href="/flavours" class="px-4 py-2 hover:text-gray-800 transition">Flavours</a>

                @auth
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Login</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="py-10">
        @yield('content')
    </main>

    <footer class="bg-yellow-500 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} KooKee Blog. All rights reserved.</p>
    </footer>
</body>
</html>
