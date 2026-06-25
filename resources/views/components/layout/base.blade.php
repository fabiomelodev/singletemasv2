<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Single Temas | Criação de Sites, Landing Pages e Sistemas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Single Temas: desenvolvimento de landing pages, sites institucionais e sistemas sob medida. Sites modernos, rápidos e responsivos, com suporte e manutenção contínua.">
    <meta name="theme-color" content="#4f46e5">

    <!-- Open Graph -->
    <meta property="og:title" content="Single Temas | Criação de Sites e Sistemas">
    <meta property="og:description"
        content="Landing pages, sites institucionais e sistemas sob medida com design moderno e suporte contínuo.">
    <meta property="og:type" content="website">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">

    @vite('resources/js/app.js')
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-white min-h-screen">
    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />

    <!-- Botão flutuante do WhatsApp -->
    <x-whatsapp-float />
</body>

</html>
