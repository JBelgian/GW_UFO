@extends('layout')

@section('content')
    <!-- Alien sightings -->
    @foreach($sightings as $sighting)
    <div class="flex justify-center">
        <!-- Boxes -->
        <div class="flex flex-wrap rounded-lg bg-green-200 w-2/3 mb-4 p-4 text-lg">
            <!-- Upper part -->
            <div class="flex w-full justify-between p-1">
                <div class="flex flex-col">
                    <div class="text-2xl">{{$sighting->categoryRelation->description}}</div>
                    <div class="text-base">{{$sighting->location}}</div>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-end">{{$sighting->date_time}}</div>
                    <div class="flex justify-end text-base">gepost door: {{$sighting->user->name}}</div>
                </div>
            </div>
            <!-- Lower part -->
            <div class="flex w-full">
                <div class="w-2/3 mr-1 p-1 text-justify">{{$sighting->description}}</div>
                <div class="w-1/3 ml-1 p-1 border border-green-900"></div>
            </div>
        </div>
    </div>
    @endforeach
@endsection