@vite(['resources/js/imagePreview.js'])
@extends('layout')

@section('content')
    <head>
        <style>
            .scrollbar-hide {
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            scrollbar-width: none;  /* Firefox */
            }
            .scrollbar-hide::-webkit-scrollbar { 
            display: none;  /* Safari and Chrome */
            }
        </style>
    </head>
    <div class="flex justify-center">
        <div class="flex flex-col w-2/3">
            <div class="flex pt-2 pr-2 pb-2 text-2xl text-green-light">
                Rapporteringsformulier
            </div>
            <form class="flex flex-col bg-green-middle p-2 rounded-lg text-green-dark" method="POST" action="{{ route('sighting.post') }}" enctype="multipart/form-data">
            @csrf
                <div class="flex flex-row justify-between p-4">
                    <input type="datetime-local" name="datetime" class="w-2/5">
                    <select name="category" class="w-2/5">
                        <option>Kies een categorie</option>
                        @foreach($categories as $category)
                            <option id={{$category->id}}>{{$category->description}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="location" placeholder="locatie" class="p-1 m-1" maxlength="50" oninput="filterCityNameIntl(this)">
                <textarea name="description" placeholder="beschrijving" class="p-1 m-1 scrollbar-hide" rows="3"></textarea>
                <div class="flex flex-row p-2 justify-between">
                    <input type="file" name="image" id="imageInput" accept="image/png, image/jpeg, image/jpg" class="w-2/5">
                    <div id="imagePreview" style="display: none;">
                        <img id="previewImg" class="w-3/5 max-h-96 p-2">
                    </div>
                </div>
                <div class="flex flex-row justify-center gap-6">
                    @guest
                        <a class="w-2/5 bg-green-accent p-2 rounded-lg text-center" href="login">Log in om een melding te doen</a>
                    @endguest
                    @auth
                        <button class="w-2/5 bg-green-accent p-2 rounded-lg" type="submit">Indienen</button>
                        <button class="w-2/5 bg-green-accent p-2 rounded-lg">Annuleren</button>
                    @endauth
                </div>
            </form>
            @if ($errors->any())
                <div class="text-red-500 p-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection

<script>
    function filterCityNameIntl(input) {
    // Allow letters (including accented), spaces, hyphens, apostrophes, and periods
    input.value = input.value.replace(/[^\p{L}\s\-\.']/gu, '');
    }
</script>