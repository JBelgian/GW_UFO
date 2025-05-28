@extends('layout')

@section('content')
<div class="flex justify-center">
    <div class="flex flex-col w-2/3">
        <!-- title -->
        <h2 class="flex text-green-light text-3xl justify-center m-2 p-2">Log in op je account</h2>
        <div class="flex flex-col bg-green-middle p-4 rounded-lg">
            <!-- form -->
            <form method="POST" action="{{ route('login.post') }}">
              @csrf

              <div class="row gy-2 overflow-hidden">
                <div class="flex flex-row text-green-dark">
                  <!-- email -->
                  <div class="w-1/2 m-2">
                    <input type="email" class="w-full p-1 placeholder-green-dark @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" required>
                  </div>
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <!-- password -->
                  <div class="w-1/2 m-2 justify-end">
                    <input type="password" class="w-full p-1 placeholder-green-dark @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="paswoord" required>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="">
                  <!-- remember me -->
                  <div class="flex flex-row pl-2 pb-2 pr-2 justify-end text-green-dark">
                    <input class="flex w-4 h-4 mt-1 mr-2" type="checkbox" value="" name="rememberMe" id="rememberMe">
                    <label class="form-check-label text-secondary" for="rememberMe">
                        Houdt mij ingelogd
                    </label>
                  </div>
                  <!-- Add page to send reset email to user
                    <a href="#!" class="">{{ __('forgot password?') }}</a>
                    -->
                </div>
                @session('error')
                    <div class="flex justify-center text-green-dark p-2" role="alert"> 
                        {{ $value }}
                    </div>
                @endsession
                <!-- button -->
                <div class="flex justify-center">
                    <button class="w-4/5 mt-2 p-2 bg-green-accent text-green-dark rounded-xl" type="submit">{{ __('Log in') }}</button>
                </div>
              </div>
            </form>
            <!-- registration reference -->
            <div class="flex flex-row justify-center text-green-dark gap-2 mt-4">
                <span>Heb je geen account? </span><a href="{{ route('register') }}" class="link-primary text-decoration-none">Registreer</a>
            </div>
          </div>
</div>
@endsection