<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="icon" type="image/x-icon" href="/img/logo.svg">

        <title>Rezept Roulette @yield('title')</title>
        @if(config('app.env') === 'production')
            <script defer data-domain="rezept-roulette.app"
                    src="https://plausible.io/js/script.hash.outbound-links.js"></script>
        @endif

        @googlefonts
        @googlefonts('headline')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <!-- Navbar -->
        <div class="navbar bg-base-100">
            <a href="/" class="flex gap-2 cursor-pointer">
                <img class="h-10 w-10" src="/img/logo.svg">
                <div class="font-serif">Rezept Roulette</div>
            </a>
        </div>

        @yield('content')

        <!-- Footer -->
        <div class="bg-neutral">
            <footer class="footer p-10 max-w-4xl w-full px-6 mx-auto text-neutral-content">
                <aside>
                    <a href="https://binary-hype.com" target="_blank" rel="noopener noreferrer">
                        <img class="h-8 mb-2" src="/img/binary-hype-logo.png">
                    </a>
                    <p>Tobias Kokesch<br>Web Development Wizard</p>
                    <p>Copyright 2024</p>
                </aside>
                <nav>
                    <h6 class="footer-title">Rechtliches</h6>
                    <a href="/impressum" class="link link-hover">Impressum</a>
                    <a href="/datenschutz" class="link link-hover">Datenschutz</a>
                </nav>
            </footer>
        </div>
    </body>
</html>
