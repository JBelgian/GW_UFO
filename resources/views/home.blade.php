@extends('layout')

@section('content')
    <!-- Alien sightings -->
    <div class="flex justify-center">
        <!-- Boxes -->
        <div class="flex flex-wrap rounded-lg bg-green-200 w-2/3 p-4 text-lg">
            <!-- Upper part -->
            <div class="flex w-full justify-between p-1">
                <div class="flex flex-col">
                    <div class="text-2xl">Soort</div>
                    <div class="text-base">Locatie</div>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-end">Datum - Tijd</div>
                    <div class="flex justify-end text-base">gepost door: User</div>
                </div>
            </div>
            <!-- Lower part -->
            <div class="flex w-full">
                <div class="w-2/3 mr-1 p-1 border border-green-900">Beschrijving</div>
                <div class="w-1/3 ml-1 p-1 border border-green-900">Foto</div>
            </div>
        </div>
    </div>
@endsection