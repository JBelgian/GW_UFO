@extends('layout')

@section('content')
    <div class="flex flex-row ml-10 mr-10">
        <!-- User Alien sightings -->
        <div class="flex flex-col w-2/3 p-4">
            <!-- Titel -->
            <div class="text-3xl pb-4">
                Mijn Meldingen
            </div>
            <!-- Boxes -->
            <div class="flex flex-wrap rounded-lg bg-green-200 w-full p-4 text-lg">
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
            <div class="flex justify-end text-2xl">
                Hallo, user
            </div>
            <div class="flex justify-end">
                Wachtwoord wijzigen
            </div>
        </div>
    </div>
@endsection