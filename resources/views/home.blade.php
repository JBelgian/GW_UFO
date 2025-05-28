@extends('layout')

@section('content')
    <!-- Alien sightings -->
    <div class="flex justify-center h-4/5">
    <div class="w-2/3 overflow-y-auto scrollbar-hide rounded-lg">
        @foreach($sightings as $sighting)

            <!-- Boxes -->
            <div class="flex flex-wrap rounded-lg bg-green-middle w-full mb-4 p-4 text-green-dark text-lg">
                <!-- Upper part -->
                <div class="flex w-full justify-between p-1">
                    <div class="flex flex-col">
                        <div class="text-2xl text-green-test">{{$sighting->categoryRelation->description}}</div>
                        <div class="text-base">{{$sighting->location}}</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-end">{{ \Carbon\Carbon::parse($sighting->date_time)->format('d F Y - H:i') }}</div>
                        <div class="flex justify-end text-base">gepost door: {{$sighting->user->name}}</div>
                    </div>
                </div>
                <!-- Lower part -->
                <div class="flex w-full">
                    <div class="w-2/3 mr-1 p-1 text-justify">{{$sighting->description}}</div>
                    @if($sighting->photo != null)
                    <div class="w-1/3 ml-2">
                        <img class="rounded-lg max-h-60" src="{{ asset('storage/' . $sighting->photo) }}">
                    </div>
                    @endif
                </div>
            
        </div>
        @endforeach
    </div>
    </div>
@endsection