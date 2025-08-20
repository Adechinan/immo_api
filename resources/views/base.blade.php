<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a href="/" class="text-white navbar-brand mx-3">Ghost</a>
            <button class="navbar-toggler bg-white" data-bs-target="#menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            @php
                $route = request()->route()->getName();
            @endphp

            <div id="menu" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"> 
                        <a @class(['nav-link', 'text-white', 'active' => str_contains($route, 'home')]) href="/">Accueil</a> 
                    </li>
                     <li class="nav-item"> 
                        <a @class(['nav-link', 'text-white', 'active' => str_contains($route, 'dashboard')]) href="/dashboard">Espace membre</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')
</body>
</html>