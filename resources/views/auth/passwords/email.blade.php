@extends('layouts.auth')

@section('page-title', 'Register a new account')

@section('content')

<div class="card card-signup">

	<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
		{{ csrf_field() }}

		<div class="header header-primary text-center">
			<h4>Reset Password</h4>
		</div>
		<p class="text-divider">Please insert your email in the input below <br>and we will send an email with the link to reset your password.</p>
		<div class="content">

			<div class="input-group">
				<span class="input-group-addon">
					<i class="material-icons">email</i>
				</span>
				<input type="email" id="email" class="form-control" name="email" placeholder="Your email..." value="{{ old('email') }}" required>
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
			</div>

			<div class="footer text-center">
				<button type="submit" class="btn btn-primary btn-round">Send Password Reset Link</button>
				<hr>
				<a href="{{ url('/') }}" class="btn btn-info btn-simple">Home</a>
				<a href="{{ route('login') }}" class="btn btn-info btn-simple">Log In</a>
				<a href="{{ route('register') }}" class="btn btn-info btn-simple">Register</a>
			</div>

	</form>

</div>

@endsection