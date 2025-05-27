@extends('layout')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col w-2/3 p-4 bg-green-200 text-green-900 rounded-lg">
            <h1 class="text-3xl p-2">Contacteer Ons</h1>
            <p class="p-2 text-justify">
                Heb je vragen, suggesties of wil je meer informatie over buitenaardse waarnemingen? Neem gerust contact met ons op via onderstaande gegevens.
            </p>

            <ul class="p-2 text-justify">
                <li>Email: <a href="mailto:info@spotmyalien.be" class="text-green-600">info@spotmyalien.be</a></li>
                <li>Telefoon: +32 12 34 56 78</li>
                <li>Adres: Spoorwegstraat 51, 1000 Brussel, België</li>
                <li>Openingsuren: Ma tot Vr: 09:00 – 17:00</li>
            </ul>
        </div>
    </div>
@endsection
