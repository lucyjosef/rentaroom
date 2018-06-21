<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        .position-menu {
            position: relative;
            margin: 0;
            height: 8vh;
            width: 100%;
            padding: 1vh;
            padding-left: 17vw;
            border-bottom: 1px solid black;
            background-color: lightblue;
        }
        .menu {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 100%;
        }
        .links > a {
            margin: 0 1vw;
            color: #636b6f;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links > a:hover {
            color: black;
        }
    </style>

    @yield('script')
</head>
<?php
$user_id = Auth::id();
?>
<body style="background-color: lightgray;">
    <div id="app">
        <div class="position-menu">
            @if (Route::has('login'))
                <div class="menu links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
        <nav class="sidenav">
            <ul class="no-style side-liste">
                <li><a href="#"><i class="fa fa-user-alt"></i> My profile</a></li>
                <li data-extra="add-room"><a href="{{ route('search') }}"><i class="fa fa-search"></i> Search</a></li>
                <li><a href="{{ route('rooms.index', ['user_id' => $user_id]) }}"><i class="fa fa-list-ul"></i> My posts</a></li>
                <li><a href="{{route('rooms.create')}}"><i class="fa fa-plus-square"></i> Create post</a></li>

                @if(Auth::check() && Auth::user()->hasRole('admin'))
                <li><a href="{{ route('rooms.index', ['user_id' => $user_id]) }}"><i class="fa fa-list-ul"></i> My posts</a></li>
                <li><a href="{{route('rooms.create')}}"><i class="fa fa-plus-square"></i> Create post</a></li>
                @endif
            </ul>
        </nav>
        @yield('content')
        <div class="results-search">
            @yield('results')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
