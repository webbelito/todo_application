@extends('layouts.login')

@section('content')

    <div class="container">

        <form class="form-signin" role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <h2 class="form-signin-heading col-md-12">Reset Password</h2>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg col-md-12">
                        Send Reset Link
                    </button>
                </div>
            </div>

      </form>

    </div> <!-- /container -->

@endsection
