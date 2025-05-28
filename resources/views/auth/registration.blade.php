@extends('layout')

@section('content')
<div class="flex justify-center">
    <div class="flex flex-col w-2/3">
        <!-- title -->
        <h2 class="flex text-green-light text-3xl justify-center m-2 p-2">Maak een account aan</h2>
        <!-- box -->
        <div class="flex flex-col bg-green-middle p-4 rounded-lg">
            <!-- form -->
            <form method="POST" action="{{ route('register.post') }}">
              @csrf

              <div class="row gy-2 overflow-hidden">
                <div class="flex justify-center">
                <div class="flex flex-col w-1/2 text-green-dark">
                  <!-- name -->
                  <div class="w-full m-2">
                      <input type="text" class="w-full p-1 placeholder-green-dark @error('name') is-invalid @enderror" name="name" id="name" placeholder="naam" required>
                  </div>
                  @error('name')
                          <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <!-- email -->
                  <div class="w-full m-2">
                    <input type="email" class="w-full p-1 placeholder-green-dark @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" required>
                  </div>
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <!-- password -->
                  <div class="w-full m-2 justify-end">
                      <input type="password" class="w-full p-1 placeholder-green-dark @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="paswoord" required>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                </div>
                @session('error')
                    <div class="flex justify-center text-green-dark p-2" role="alert"> 
                        {{ $value }}
                    </div>
                @endsession
                <!-- button -->
                <div class="flex justify-center">
                    <button class="w-4/5 mt-2 p-2 bg-green-accent text-green-dark rounded-xl" type="submit">{{ __('Registreer') }}</button>
                </div>
              </div>
            </form>
            <!-- log in reference -->
            <div class="flex flex-row justify-center text-green-dark gap-2 mt-4">
                <span>Heb je een account? </span><a href="{{ route('login') }}" class="link-primary text-decoration-none">Log in</a>
            </div>
          </div>
</div>
@endsection