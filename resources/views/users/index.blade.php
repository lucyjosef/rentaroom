@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              <a href="{{ url('/SignOut') }}">Sign Out</a>
          </div>
      @endif
  </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="viewer">
            <div class="flex-center">
              <h3>List of users</h3>
              <ul data-use="UserList">
                @foreach($UserList as $key => $value)
                  <?php $RouteId=e($value->id);?>
                  <li>{{ $value->name }}  <a href="{{ route('users.delete',$RouteId) }}"><i class="fas fa-trash-alt"></i></a>  <a href="{{ route('users.edit',$RouteId,'/edit') }}"><i class="fas fa-pencil-alt"></i></a></li>
                @endforeach
              </ul>
          </div>
        </div>
    </div>
</div>

@endsection
