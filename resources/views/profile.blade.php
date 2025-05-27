@vite(['resources/js/typeWriter.js'])
@extends('layout')

@section('content')
    <div class="flex flex-row ml-10 mr-10">
        <!-- User Alien sightings -->
        <div class="flex flex-col w-2/3 p-4">
            <!-- Titel -->
            <div class="text-3xl text-green-light pb-4">
                Mijn Meldingen
            </div>
            <!-- No sightings yet -->
            <div class="flex gap-6 flex-col">
                <img src="{{ asset('Alien.jpg') }}" class="w-1/3 rounded-lg">
                <div id="noAlienText" class="text-green-light content-center"></div>
            </div>
            <!-- Boxes -->
            <div class="flex flex-wrap rounded-lg bg-green-middle text-green-dark w-full p-4 text-lg hidden">
                <!-- Upper part -->
                <div class="flex w-full justify-between p-1">
                    <div class="text-2xl">Soort</div>
                    <div class="flex flex-col">
                        <div class="flex justify-end">Datum - Tijd</div>
                        <div class="flex justify-end">Locatie</div>
                    </div>
                </div>
                <!-- Lower part -->
                <div class="flex w-full">
                    <div class="w-2/3 mr-1 p-1 border border-green-900">Beschrijving</div>
                    <div class="w-1/3 ml-1 p-1 border border-green-900">Foto</div>
                </div>
            </div>
        </div>
        <!-- User info -->
        <div class="flex flex-col w-1/3 p-4">
            <div class="flex justify-end text-2xl text-green-light text-right" id="welcomeText">

            </div>
            <div class="flex justify-end text-green-accent">
                Wachtwoord wijzigen
            </div>
        </div>
    </div>
@endsection
<script>
    const userName = @json(Auth::user()->name ?? 'bezoeker');

    const textsById = {
        // if sightings.length > 0 then this, anders enkel welkom username
        welcomeText: `Welkom terug, ${userName}! Klaar om een alien te spotten? 👽`,
        noAlienText: 'Je hebt nog geen alien activiteit ontdekt!',
    };
</script>