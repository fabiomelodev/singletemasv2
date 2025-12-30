<html>

<head>
    <title>Site</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="bg-gradient-to-br from-slate-950 min-h-screen to-slate-900 via-purple-950">
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>

</html>