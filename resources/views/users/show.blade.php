@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your profile</div>

                <div class="panel-body">
                        <?php $RouteId=e($UserList->id);
                              $RouteName=e($UserList->name);
                              $RouteEmail=e($UserList->email);
                              $RoutePwd=e($UserList->password);
                              $RouteParam="/MajUser/" . $RouteId . "/" . $RouteName . "/" . $RouteEmail;
                              //dd($RouteId);
                        ?>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name :</label>
                            <div class="col-md-6">
                                <label for="name" class="col-md-4 control-label">{{ $UserList->name }}</label>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address :</label>
                            <div class="col-md-6">
                                <label for="name" class="col-md-4 control-label">{{ $UserList->email }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div style="margin-top:1em;" class="col-md-8 col-md-offset-0">
                                <a href="{{ route('users.edit',$RouteId,'/edit') }}"><button type="text" class="btn btn-primary">
                                    Edit
                                </button></a>
                                <a href="{{ route('users.chgpwd') }}"><button type="text" class="btn btn-primary">
                                    Change password
                                </button></a>
                                <a href="{{ route('users.delete',$RouteId) }}"><button type="text" class="btn btn-primary">
                                    Delete
                                </button></a>
                                <a href="{{ route('home') }}"><button type="text" class="btn btn-primary">
                                    Cancel
                                </button></a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
