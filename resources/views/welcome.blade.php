<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="relative sm:flex flex-col sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100  selection:bg-red-500 selection:text-white">
            <h1 class="text-7xl text-black">Contact System</h1>
            @if (Route::has('login'))
                <div class="mt-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-black hover:text-gray-900 ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-black hover:text-gray-900 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black hover:text-gray-900 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </body>
</html>
