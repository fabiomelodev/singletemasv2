<html>

<head>
    <title>Single Temas | Desenvolvimento de site e sistemas</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-gradient-to-br from-slate-950 min-h-screen to-slate-900 via-purple-950">
    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>

</html>