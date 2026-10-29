<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gradient-to-br from-neutral-50 via-white to-neutral-100 dark:from-neutral-900 dark:via-neutral-950 dark:to-black text-neutral-800 dark:text-neutral-100">

    {{-- Navbar --}}
    <header class="flex items-center justify-between px-6 py-4 border-b border-neutral-200 dark:border-neutral-800">
        <h1 class="text-xl font-semibold tracking-tight">{{ config('app.name', 'Laravel') }}</h1>
    </header>

    {{-- Hero section --}}
    <section class="flex flex-col items-center justify-center px-6 py-24 text-center">
        <h2 class="text-5xl font-bold tracking-tight mb-6 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
            Benvingut a {{ config('app.name', 'Laravel') }}
        </h2>
        <p class="max-w-xl text-lg text-neutral-600 dark:text-neutral-400 mb-8">
            Una aplicació moderna, segura i ràpida, desenvolupada amb Laravel i desplegada amb CI/CD automàtic.
        </p>
    </section>

    {{-- Feature grid --}}
    <section class="px-6 py-16 border-t border-neutral-200 dark:border-neutral-800">
        <div class="max-w-5xl mx-auto grid gap-10 sm:grid-cols-3 text-center">
            <div>
                <div class="text-4xl mb-3">⚡</div>
                <h3 class="font-semibold mb-2 text-lg">Ràpid i modern</h3>
                <p class="text-sm text-neutral-600 dark:text-neutral-400">Laravel + Tailwind per oferir una experiència fluïda i elegant.</p>
            </div>
            <div>
                <div class="text-4xl mb-3">🔒</div>
                <h3 class="font-semibold mb-2 text-lg">Segur per disseny</h3>
                <p class="text-sm text-neutral-600 dark:text-neutral-400">Protecció CSRF, validació automàtica i bones pràctiques per defecte.</p>
            </div>
            <div>
                <div class="text-4xl mb-3">🚀</div>
                <h3 class="font-semibold mb-2 text-lg">CI/CD integrat</h3>
                <p class="text-sm text-neutral-600 dark:text-neutral-400">Cada commit es prova i desplega automàticament a Laravel Cloud.</p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-8 text-center text-sm text-neutral-500 dark:text-neutral-500 border-t border-neutral-200 dark:border-neutral-800">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }} · Fet amb ❤️ amb Laravel</p>
    </footer>

</body>
</html>

