@extends('layout')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col w-2/3">
        <h2 class="text-3xl text-green-light mb-2">Verander wachtwoord</h2>
        <div class="bg-green-middle p-4 rounded-lg">

            @if (session('error'))
                <div class="text-red-600 mb-4">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <div class="mb-4">
                    <label for="current_password" class="text-green-dark">Huidig wachtwoord</label>
                    <input type="password" name="current_password" id="current_password" class="w-full border border-green-dark rounded-lg  p-2 @error('current_password') border-red-600 @enderror" required>
                    @error('current_password')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="new_password" class="text-green-dark">Nieuw wachtwoord</label>
                    <input type="password" name="new_password" id="new_password" class="w-full border border-green-dark rounded-lg p-2 @error('new_password') border-red-600 @enderror" required>
                    @error('new_password')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="new_password_confirmation" class="text-green-dark">Bevestig nieuw wachtwoord</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="w-full border border-green-dark rounded-lg p-2" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-green-accent text-green-dark w-2/3 px-4 py-2 rounded-lg">Verander wachtwoord</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection
