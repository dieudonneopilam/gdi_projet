<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Les observatoire fiscales</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-d68d0937.css') }}">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    @livewireStyles
</head>
<body>
    @include('layouts.header')
    
    @yield('main')
    @if (Route::is('home'))
        @isset(auth()->user()->id)
            <a href="#right-sidebar" class="a-comment">visualiser les commentaires</a>
        @else
            <a href="#right-sidebar" class="a-comment">commentez</a>
        @endisset
    @endif
    @livewireScripts
    <script src="{{ asset('build/assets/app-657bc052.js') }}"></script>
</body>

</html>
