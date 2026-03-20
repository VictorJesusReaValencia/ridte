<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'RIDTE - Consorcio Global para la Innovación en Tecnología Educativa')</title>
    <link rel="icon" type="image/webp" href="{{ asset('images/logo-ridte.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&amp;family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-white text-slate-900 px-4 py-2 border border-slate-200"
        href="#contenido-principal">Saltar al contenido principal</a>
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        @include('partials.header')

        <main class="flex-1" id="contenido-principal" tabindex="-1">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
