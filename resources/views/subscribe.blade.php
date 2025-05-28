@extends('layout')

@section('content')
<div class="flex justify-center">
    <div class="flex flex-col w-2/3">
        <h2 class="flex text-green-light text-3xl justify-center m-2 p-2">Word Patron</h2>
        <div class="p-4 bg-green-middle rounded-lg">
            <h3 class="text-xl font-bold text-green-dark mb-4">Steun Ons Project</h3>
            <p class="text-green-dark mb-6">
                Als patron helpt u ons project te ondersteunen.
            </p>
            
            <form method="POST" action="{{ route('subscription.process') }}" class="flex justify-center">
                @csrf
                <button type="submit" class="px-6 py-3 bg-green-accent text-green-dark rounded-lg hover:bg-green-light">
                    Doorgaan naar Betaling
                </button>
            </form>
        </div>
    </div>
</div>
@endsection