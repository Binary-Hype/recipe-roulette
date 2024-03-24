<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">


        <title>Rezept Roulette @yield('title')</title>


        @googlefonts
        @googlefonts('headline')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <!-- Navbar -->
        <div class="navbar bg-base-100">
            <a href="/" class="btn btn-ghost text-xl">Rezept Roulette</a>
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
                    <h6 class="footer-title">Social</h6>
                    <div class="grid grid-flow-col gap-4">
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 class="fill-current">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                    </div>
                </nav>
                <nav>
                    <h6 class="footer-title">Rechtliches</h6>
                    <a href="/impressum" class="link link-hover">Impressum</a>
                    <a href="/datenschutz" class="link link-hover">Datenschutz</a>
                </nav>
            </footer>
        </div>
    </body>
</html>
