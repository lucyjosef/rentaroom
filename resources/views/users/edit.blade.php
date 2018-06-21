@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user-profil.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit your profile</div>

                <div class="panel-body">
                        <?php $RouteId=e($UserList->id);
                              $RouteName= e($UserList->name);
                              $RouteEmail=e($UserList->email);
                              $RoutePwd=e($UserList->password);
                              $RouteParam=$RouteId . "/" . $RouteName . "/" . $RouteEmail;
                              //dd($RouteId);
                        ?>

                        <form class="form-horizontal" method="GET" action="{{ route('users.maj') }}">
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="id" class="col-md-4 control-label hidden">Id</label>

                              <div class="col-md-6">
                                  <input id="id" type="text" class="form-control hidden" name="id" value="{{ $UserList->id }}" required autofocus>
                              </div>
                          </div>


                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Name</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ $UserList->name }}" required autofocus>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ $UserList->email }}" required>
                              </div>
                          </div>

                          <div class="form-group edit-container">
                              <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="custom-btn-2"><i class="fas fa-edit"></i>
                                    Update
                                </button>
                                <a href="{{ route('home') }}"><button type="text" class="custom-btn">
                                  <i class="far fa-trash-alt"></i>
                                    Cancel
                                </button></a>
                              </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
