<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    @livewireStyles
</head>

<body class="bg-gray-100 font-sans padding-top: 64px">
    <!-- Barra de navegación fija -->
    @include('sections.nav')
    <!-- Barra de navegación fija -->

    <!-- Sección 1 -->
    @include('sections.section1')
    <!-- Sección 1 -->

    <!-- Sección 2 -->
    @include('sections.section2')
    <!-- Sección 2 -->

    <!-- Sección 3 -->
    <livewire:main />
    <!-- Sección 3 -->
    @livewireScripts
</body>

</html>
