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
    <div class="flex flex-row gap-4">
        <div>
            <a href="login">Login</a>
        </div>
        <div>
            <a href="registration">Registreer
        </div>
    </div>
    <!-- Profile/Logout -->
    <div class="flex flex-row gap-4 hidden">
        <div>
            <a href="/profile">Profiel</a>
        </div>
        <div>
            <a href="logout">log uit</a>
        </div>
    </div>
</div>