@extends('layout')

@section('content')
    <div class="flex justify-center">
        <!-- Box --> 
        <div class="flex flex-col w-2/3 p-4 bg-green-middle text-green-dark rounded-lg">
            <!-- Title -->
            <h1 class="text-3xl p-2 text-green-test">Over Ons</h1>
            <!-- Text -->
            <p class="p-2 text-justify">
                Welkom bij Spot my Alien, hét platform voor iedereen die iets ongewoons aan de hemel heeft gezien. Of je nu een flitsend licht hebt opgemerkt, een vreemd object hebt gefotografeerd, of simpelweg je ervaring wilt delen: wij bieden een veilige ruimte waar jouw verhaal telt.
            </p>
            <p class="p-2 text-justify">
                Ons team bestaat uit enthousiastelingen, wetenschappers, en vrijwilligers die gepassioneerd zijn door het onbekende. We verzamelen getuigenissen, analyseren patronen en proberen op een open manier fenomenen te begrijpen die zich vaak onttrekken aan logische verklaringen.
            </p>
            <p class="p-2 text-justify">
                Onze missie is tweeledig: enerzijds willen we mensen aanmoedigen om hun ervaringen te delen zonder angst voor oordeel, anderzijds trachten we met respect voor wetenschap en getuigenverklaringen te komen tot beter begrip van buitenaardse of onverklaarbare waarnemingen.
            </p>
            <p class="p-2 text-justify">
                Heb jij iets vreemds gezien? Aarzel niet om je waarneming met ons te delen via onze 
                <a href="/rapport" class="text-green-test">meldingspagina</a>. 
                Samen zoeken we naar antwoorden.
            </p>
        </div>
    </div>
@endsection