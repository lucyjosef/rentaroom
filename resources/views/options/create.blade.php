@extends('layouts.dashboard')

@section('style')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection

@section('content')
<nav class="sidenav">
    <ul class="no-style side-liste">
        <li><a href="#">My profile</a></li>

        @if(Auth::check() && Auth::user()->hasRole('admin'))
        <li><a href="#">My posts</a></li>
        @endif

        <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="viewer">
            <i class="fab fa-fort-awesome"></i>
        </div>
    </div>
</div>
@endsection
