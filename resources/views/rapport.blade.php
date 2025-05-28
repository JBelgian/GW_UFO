@vite(['resources/js/imagePreview.js', 'resources/js/form.js'])
@extends('layout')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col w-2/3">
            <!-- title -->
            <div class="flex pt-2 pr-2 pb-2 text-2xl text-green-light">
                Rapporteringsformulier
            </div>
            <!-- form -->
            <form class="flex flex-col bg-green-middle p-2 rounded-lg text-green-dark" method="POST" action="{{ route('sighting.post') }}" enctype="multipart/form-data">
            @csrf
                <div class="flex flex-row justify-between p-4">
                    <!-- datetime -->
                    <input type="datetime-local" name="datetime" class="w-2/5">
                    <!-- category -->
                    <select name="category" class="w-2/5">
                        <option>Kies een categorie</option>
                        @foreach($categories as $category)
                            <option id={{$category->id}}>{{$category->description}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- datetime/category error messages -->
                @error('category')
                    <div class="text-red-600 text-sm p-2 error-message">{{ $message }}</div>
                @enderror
                @error('datetime')
                    <div class="text-red-600 text-sm p-2 error-message">{{ $message }}</div>
                @enderror

                <!-- location -->
                <input type="text" name="location" placeholder="locatie" class="p-1 m-1" maxlength="50" oninput="filterCityNameIntl(this)">
                <!-- location error message -->
                @error('location')
                    <div class="text-red-600 text-sm p-2 error-message">{{ $message }}</div>
                @enderror

                <!-- description -->
                <textarea name="description" placeholder="beschrijving" class="p-1 m-1 scrollbar-hide" rows="3"></textarea>
                <!-- description error message -->
                @error('description')
                    <div class="text-red-600 text-sm p-2 error-message">{{ $message }}</div>
                @enderror

                <!-- image -->
                <div class="flex flex-row p-2 justify-between">
                    <input type="file" name="image" id="imageInput" accept="image/png, image/jpeg, image/jpg" class="w-2/5">
                    <div id="imagePreview" style="display: none;">
                        <img id="previewImg" class="w-3/5 max-h-96 p-2">
                    </div>
                </div>
                <!-- image error message -->
                @error('image')
                    <div class="text-red-600 text-sm p-2 error-message">{{ $message }}</div>
                @enderror
                <!-- buttons -->
                <div class="flex flex-row justify-center gap-6">
                    @guest
                        <a class="w-2/5 bg-green-accent p-2 rounded-lg text-center" href="login">Log in om een melding te doen</a>
                    @endguest
                    @auth
                        <button class="w-2/5 bg-green-accent p-2 rounded-lg" type="submit">Indienen</button>
                        <button class="w-2/5 bg-green-accent p-2 rounded-lg" type="button" onclick="resetForm()">Annuleren</button>
                    @endauth
                </div>
            </form>
        </div>
    </div>
@endsection
