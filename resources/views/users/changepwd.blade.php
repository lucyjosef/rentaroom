@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user-profil.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change password</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.updpwd') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label hidden">Id</label>
                            <?php $UserId = Auth::id(); ?>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control hidden" name="id" value="{{$UserId}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($MsgError[0])
                                    <span style="color:red;" class="help-block">
                                        <strong>{{ $MsgError[1] }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 edit-container">
                                <button type="submit" class="custom-btn-2"><i class="far fa-check-circle"></i>
                                    Validate
                                </button>
                                <a href="{{ route('home') }}"><button type="text" class="custom-btn"><i class="far fa-trash-alt"></i>
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
