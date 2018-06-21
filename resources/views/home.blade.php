@extends('layouts.dashboard')

@section('style')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style type="text/css">
  div.top-right {
    z-index: 2000;
  }
</style>
@endsection

@section('content')
<div class="container">
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              <a href="{{ route('users.signout') }}">Sign Out</a>
          </div>
      @endif
  </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="viewer">
            <i class="fab fa-fort-awesome"></i><br>
            <p class="notification">{{ session()->get('message') }}</p>
        </div>
    </div>
</div>
@endsection
