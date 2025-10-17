<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="colorbody min-h-screen flex flex-col font-inter text-gray-800 bg-gradient-to-b from-sky-100 via-sky-200 to-sky-100">

   
    <x-navbar />

   
    <main class="flex-grow container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

   
    <x-footer />
    

    @livewireScripts
</body>
</html>
