@extends('layouts.app')

@section('meta-description', "Beantworten Sie die Frage 'Was koche ich heute?' und entdecke täglich neue Rezeptideen für vegane, vegetarische oder Fleischgerichte. Wählen Sie Ihre Präferenz und lasse dich von unserer Auswahl inspirieren. Deine nächste kulinarische Entdeckungsreise beginnt mit nur einem Klick!")

@section('content')
    <!-- Hero -->
    <div class="hero relative min-h-[60vh] mb-10">
        <div class="absolute left-0 top-0 h-full w-full opacity-10"
             style="background-image: url(/img/i-like-food.svg);">

        </div>
        <div class="hero-content text-center">
            <div class="max-w-lg">
                <h1 class="text-5xl font-serif font-bold">Was soll ich heute kochen?</h1>
                <p class="text-xl py-10">Entdecke es jetzt mit nur einem Klick und lass dich von neuen Geschmäckern
                    inspirieren</p>
                <a href="#roulette" class="btn btn-primary">Lass dich überraschen</a>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="content">
        <h2 class="text-3xl font-serif text-center font-bold mb-5">Der Geschmacksentscheider: Nie wieder ratlos vor
            dem Kühlschrank</h2>
        <div class="flex gap-5 items-center">
            <p class="text-lg">Willkommen in unserer Welt der Zufallsrezepte! Unsere Leidenschaft für Kochen und die Freude am
                Entdecken
                neuer Geschmäcker hat uns inspiriert, diesen Generator zu entwickeln. Unser Ziel? Euch dabei zu
                unterstützen, das Kochen neu zu entdecken und die tägliche Frage 'Was koche ich heute?' spannend und
                abwechslungsreich zu beantworten. Lasst euch überraschen und inspirieren!</p>
        </div>

    </div>

    <!-- Manual -->
    <div class="content">
        <h2 class="text-3xl font-serif text-center font-bold mb-5">Ganz einfach zum nächsten Lieblingsrezept</h2>

        <div class="text-lg my-4">
            <div class="flex items-center gap-2 mb-3">
                <span class="font-serif text-primary text-3xl">1</span>
                Präferenzen auswählen
            </div>
            <div class="flex items-center gap-2 mb-3">
                <span class="font-serif text-primary text-3xl">2</span>
                Rezept per Zufall auswählen lassen
            </div>
            <div class="flex items-center gap-2 mb-3">
                <span class="font-serif text-primary text-3xl">3</span>
                Falls du keine Lust darauf hast, einfach ein neues Rezept generieren lassen
            </div>
        </div>
    </div>

    <!-- Roulette -->
    <div id="roulette" class="flex justify-center">
        <livewire:recipe-roulette/>
    </div>

@endsection
