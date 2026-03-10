<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Votely | Live Real-Time Polling' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #030712; 
            color: white;
        }
        .glass-nav { 
            background: rgba(3, 7, 18, 0.6); 
            backdrop-filter: blur(12px); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.05); 
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">

    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-violet-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-pink-600/10 rounded-full blur-[120px]"></div>
    </div>

    <nav class="glass-nav sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-8 h-8 bg-violet-600 rounded-lg flex items-center justify-center group-hover:rotate-12 transition-transform">
                    <i data-lucide="bar-chart-3" class="w-5 h-5 text-white"></i>
                </div>
                <span class="text-2xl font-extrabold tracking-tighter">VOTE<span class="text-violet-500">LY.</span></span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-400">
                <a href="/explore" class="hover:text-white transition">Public Polls</a>
                <a href="/pricing" class="hover:text-white transition">Pricing</a>
                @auth
                    <a href="/dashboard" class="text-white bg-white/5 px-4 py-2 rounded-lg border border-white/10">My Dashboard</a>
                @else
                    <a href="/login" class="hover:text-white transition">Sign In</a>
                    <a href="/register" class="px-5 py-2.5 bg-white text-black rounded-full font-bold hover:bg-violet-500 hover:text-white transition-all duration-300">
                        Join Votely
                    </a>
                @endauth
            </div>

            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="p-2 text-gray-400 hover:text-white">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-gray-500 text-sm">© 2026 Votely Engine. Built with Laravel Reverb.</p>
            <div class="flex gap-6 text-gray-400 text-sm">
                <a href="#" class="hover:text-white transition">Terms</a>
                <a href="#" class="hover:text-white transition">Privacy</a>
                <a href="#" class="hover:text-white transition">API</a>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
    
    {{-- @livewireScripts --}}
</body>
</html>