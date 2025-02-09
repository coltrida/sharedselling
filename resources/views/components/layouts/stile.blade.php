<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shared Selling</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 ">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-6 lg:grid-cols-3">
                <div>
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <a href="{{route('inizio')}}" title="home" wire:navigate >
                            <path fill="white" fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                        </a>
                    </svg>
                </div>

                <div class="flex lg:justify-center lg:col-start-2">
                    <h2 class="text-4xl font-semibold text-black dark:text-white">Shared Selling</h2>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </header>

            <main class="mt-2">
                {{ $slot }}
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                @ ColtricatVite 2025
            </footer>
        </div>
    </div>
</div>
</body>
</html>
