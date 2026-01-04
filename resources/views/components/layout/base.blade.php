<html>

<head>
    <title>Single Temas | Desenvolvimento de site e sistemas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-950 min-h-screen to-slate-900 via-purple-950">
    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>

</html>
