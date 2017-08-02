@extends('layouts.auth')

@section('page-title', 'Reset password')

@section('content')

<div class="card card-signup">

    <form method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="header header-primary text-center">
            <h4>Reset Password</h4>
        </div>

        <p class="text-divider">Please type your email and the new password</p>
        <div class="content">

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <input type="email" id="email" class="form-control" name="email" placeholder="Your email..." value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                    <input type="password" id="password" placeholder="Password..." name="password"  class="form-control" value="{{ old('password') }}" required/>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                    <input type="password" id="password-confirm" placeholder="Password Confirmation..." name="password_confirmation" class="form-control" required/>
                </div>
            </div>

            <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-round">Reset Password</button>
            </div>
        </div>
    </form>
</div>
@endsection
