<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-400">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title></title>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="h-full">
        <div class="min-h-full" x-data="{ mobileMenuOpen: false, profileMenuOpen: false }">
            <x-navbar></x-navbar>

            <x-header>{{ $title }}</x-header>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <p class="text-gray-600">
                        {{ $slot }}
                    </p>
                </div>
            </main>
        </div>

        <x-footer></x-footer>
    </body>
</html>
