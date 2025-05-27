<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="flex flex-row justify-between pt-8 pl-6 pb-8 pr-6 text-lg rounded-lg bg-green-middle text-green-dark">
    <!-- Home -->
    <div>
        <a href="/home">Home</a>
    </div>
    <!-- Note Alien sighting -->
    <div>
        <a href="/rapport">Meld</a>
    </div>
    <!-- About us -->
    <div>
        <a href="/about">Over Ons</a>
    </div>
    <!-- Contact -->
    <div>
        <a href="/contact">Contact</a>
    </div>
    <!-- Login/Register -->
    @guest
    <div class="flex flex-row gap-4">
        <div>
            <a href="login">Log in</a>
        </div>
        <div>
            <a href="registration">Registreer</a>
        </div>
    </div>
    @endguest
    <!-- Profile/Logout -->
    @auth
    <div class="flex flex-row gap-4">
        <div>
            <a href="/profile">Profiel</a>
        </div>
        <div>
            <a href="logout">log uit</a>
        </div>
    </div>
    @endauth
</div>