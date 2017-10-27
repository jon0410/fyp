@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apply</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        
                        <div class="form-group{{ $errors->has('std_id') ? ' has-error' : '' }}">
                            <label for="std_id" class="col-md-4 control-label">Student Id</label>

                            <div class="col-md-6">
                                <input id="std_id" type="text" class="form-control" name="std_id" value="{{ old('std_id') }}" required autofocus>

                                @if ($errors->has('std_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('std_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('hostel_type') ? ' has-error' : '' }}">
                            <label for="hostel_type" class="col-md-4 control-label">Hostel Type</label>

                            <div class="col-md-6">
                            
                               <input name="hostel_type" type="radio" value="Deluxe">Deluxe<br>

                                <input name="hostel_type" type="radio" value="Standard">Standard
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                            <label for="room_no" class="col-md-4 control-label">Hostel Type</label>

                            <div class="col-md-6">
                            
                               <input name="room_no" type="radio" value="100">100<br>

                                <input name="room_no" type="radio" value="200">200
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
