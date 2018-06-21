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
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

</head>
<?php
$user_id = Auth::id();
?>
<body>
    <div id="app">
        <nav class="sidenav">
            <ul class="no-style side-liste">
                <li><a href="{{ route('users.show', ['user_id' => $user_id]) }}"><i class="fa fa-user-alt"></i> My profile</a></li>
                <li data-extra="add-room"><a href="#"><i class="fa fa-search"></i> Search</a></li>
                <li><a href="{{ route('rooms.index', ['user_id' => $user_id]) }}"><i class="fa fa-list-ul"></i> My posts</a></li>
                <li><a href="{{route('rooms.create')}}"><i class="fa fa-plus-square"></i> Create post</a></li>


                <li><a href="{{ route('rooms.index', ['user_id' => $user_id]) }}"><i class="fa fa-list-ul"></i> My posts</a></li>
                <li><a href="{{route('rooms.create')}}"><i class="fa fa-plus-square"></i> Create post</a></li>

            </ul>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
