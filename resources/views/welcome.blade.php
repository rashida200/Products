<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        {{-- <style>
            .fix-line {
                border: none !important;
                box-shadow: none !important;
            }
        </style> --}}
        @endif
    </head>
    <body class="font-sans antialiased bg-[#FAF5F1] text-[#292F36]">
        <div class="bg-[#FAF5F1] text-[#292F36]">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#A41F13] selection:text-[#FAF5F1]">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="py-10">
                        <!-- Adjust the navigation to center the buttons -->
                        @if (Route::has('login'))
                            <nav class="flex justify-center gap-6">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-6 py-3 bg-[#A41F13] text-[#FAF5F1] ring-1 ring-[#E0DBD8] transition hover:bg-[#8F7A6E] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#A41F13]">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="rounded-md px-6 py-3 bg-[#A41F13] text-[#FAF5F1] ring-1 ring-[#E0DBD8] transition hover:bg-[#8F7A6E] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#A41F13]">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="rounded-md px-6 py-3 bg-[#A41F13] text-[#FAF5F1] ring-1 ring-[#E0DBD8] transition hover:bg-[#8F7A6E] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#A41F13]">Register</a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                </div>
            </div>
        </div>
    </body>
</html>
