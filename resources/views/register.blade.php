@extends('layouts.auth')

@section('page-title', 'Register a new account')

@section('content')

<div class="card card-signup">
	<form class="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
		<div class="header header-primary text-center">
			<h4>Register Form</h4>

		</div>
		<p class="text-divider">Please fill the form bellow</p>
		<div class="content">

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">face</i>
					</span>
					<input type="text" class="form-control" name="name" placeholder="Name..." value="{{ old('name') }}" required autofocus>
					@if ($errors->has('name'))
                    <span class="help-block">
                    	<strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">email</i>
					</span>
					<input type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}" required>
					@if ($errors->has('email'))
					<span class="help-block">
                    	<strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock_outline</i>
					</span>
					<input type="password" placeholder="Password..."  class="form-control" value="{{ old('password') }}" required/>
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

		</div>
		<div class="footer text-center">
			<button type="submit" href="#pablo" class="btn btn-simple btn-primary btn-lg">Submit</button>
			Have already an accout ? 
			<a href="{{ route('login') }}" class="btn btn-simple btn-primary btn-lg">Log In</a>
		</div>
	</form>
</div>

@endsection('content')
