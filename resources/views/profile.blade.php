@vite(['resources/js/typeWriter.js'])
@extends('layout')

@section('content')
    <div class="flex flex-row ml-10 mr-10 h-4/5">
        <!-- User Alien sightings -->
        <div class="flex flex-col w-2/3 p-4">
            <!-- Titel -->
            <div class="text-3xl text-green-light pb-4">
                Mijn Meldingen
            </div>
            <!-- Boxes -->
            @if($sightings->isNotEmpty())
            <div class="overflow-y-auto scrollbar-hide rounded-lg">
                @foreach($sightings as $sighting)
                <div class="flex flex-wrap rounded-lg bg-green-middle text-green-dark w-full mb-4 p-4 text-lg">
                    <!-- Upper part -->
                    <div class="flex w-full justify-between p-1">
                        <div class="text-2xl">{{$sighting->categoryRelation->description}}</div>
                        <div class="flex flex-col">
                            <div class="flex justify-end">{{ \Carbon\Carbon::parse($sighting->date_time)->format('d F Y - H:i') }}</div>
                            <div class="flex justify-end">{{$sighting->location}}</div>
                        </div>
                    </div>
                    <!-- Lower part -->
                    <div class="flex w-full">
                        <div class="w-2/3 mr-1 p-1">{{$sighting->description}}</div>
                        @if($sighting->photo != null)
                        <div class="w-1/3 ml-2">
                            <img class="rounded-lg max-h-96" src="{{ asset('storage/' . $sighting->photo) }}">
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- No sightings yet -->
            <div class="flex gap-6 flex-col">
                <img src="{{ asset('Alien.jpg') }}" class="w-1/3 rounded-lg">
                <div id="noAlienText" class="text-green-light content-center"></div>
            </div>
            @endif
        </div>
        <!-- User info -->
        <div class="flex flex-col w-1/3 p-4">
            <div class="flex justify-end text-2xl text-green-light text-right" id="welcomeText">

            </div>
            <a href="password" class="flex justify-end text-green-accent">
                Wachtwoord wijzigen </a>
            </div>
            @if(auth()->user()->subscribed('patron'))
                <div class="p-4 bg-green-light rounded-lg mt-4">
                    <h3 class="text-xl font-bold text-green-dark">Patron Status: Actief</h3>
                    <p class="text-green-dark">Hartelijk dank voor uw ondersteuning!</p>
                    <a href="{{ route('billing.portal') }}" class="inline-block mt-2 p-2 bg-green-accent text-green-dark rounded-lg">
                        Beheer Abonnement
                    </a>
                </div>
            @else
                <div class="p-4 bg-green-middle rounded-lg mt-4">
                    <h3 class="text-xl font-bold text-green-dark">Word Patron</h3>
                    <p class="text-green-dark">Ondersteun ons werk door patron te worden.</p>
                    <a href="{{ route('subscription.show') }}" class="inline-block mt-2 p-2 bg-green-accent text-green-dark rounded-lg">
                        Word Patron
                    </a>
                </div>
            @endif

            @if(request()->has('subscription') && request('subscription') == 'success')
                <div class="p-4 bg-green-light rounded-lg mt-4">
                    <p class="text-green-dark">Bedankt voor uw abonnement!</p>
                </div>
            @endif

        </div>
    </div>
@endsection

<script>
    const userName = @json(Auth::user()->name);
    const sightings = @json($sightings);

    // Sets messages to display with typewriter
    const textsById = {
        welcomeText: sightings.length > 0
            ? `Welkom terug, ${userName}! Klaar om een alien te spotten? 👽`
            : `Welkom, ${userName}!`,
        noAlienText: sightings.length === 0
            ? 'Je hebt nog geen alien activiteit ontdekt!'
            : '',
    };
</script>