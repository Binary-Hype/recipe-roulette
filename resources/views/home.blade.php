<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

        <title>Rezept Roulette</title>

        @googlefonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
       <!-- Hero -->
        <div class="hero min-h-[60vh]">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Was soll ich heute kochen?</h1>
                    <p class="text-xl py-6">Entdecke es jetzt mit nur einem Klick und lass dich von neuen Geschmäckern inspirieren</p>
                    <button class="btn btn-primary">Lass dich überraschen</button>
                </div>
            </div>
        </div>

        <!-- Content -->
    </body>
</html>




