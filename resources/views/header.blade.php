<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="flex flex-row justify-between pt-8 pl-6 pb-8 pr-6 text-lg font-mono rounded-lg bg-green-200 text-green-900">
    <!-- Home -->
    <div>
        <a href="/home">Home</a>
    </div>
    <!-- Note Alien sighting -->
    <div>
        <a href="">Meld</a>
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
    <div class="flex flex-row gap-4 text-green-800">
        <div>Login</div>
        <div>Registreer</div>
    </div>
    <!-- Profile/Logout -->
    <div class="flex flex-row hidden text-green-800">
        <div>Profiel</div>
        <div>log uit</div>
    </div>
</div>