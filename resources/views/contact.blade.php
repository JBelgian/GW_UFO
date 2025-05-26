@extends('layout')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col w-2/3 p-4 bg-green-middle text-green-dark rounded-lg">
            <h1 class="text-3xl p-2 text-green-test">Contacteer Ons</h1>
            <p class="p-2 text-justify">
                Heb je vragen, suggesties of wil je meer informatie over buitenaardse waarnemingen? Neem gerust contact met ons op via onderstaande gegevens.
            </p>

            <ul class="p-2 text-justify text-green-test">
                <li>Email: <a href="mailto:info@spotmyalien.be">info@spotmyalien.be</a></li>
                <li>Telefoon: +32 12 34 56 78</li>
                <li>Adres: Spoorwegstraat 51, 1000 Brussel, België</li>
                <li>Openingsuren: Ma tot Vr: 09:00 – 17:00</li>
            </ul>
        </div>
    </div>
@endsection
