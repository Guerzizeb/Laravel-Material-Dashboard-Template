@extends('layouts.auth')

@section('page-title', 'Login')

@section('content')

<div class="card card-signup">
	<form class="form" method="POST" action="{{ route('login') }}">
        
        {{ csrf_field() }}
		
		<div class="header header-primary text-center">
			<h4>Sign In</h4>
		</div>
		<p class="text-divider">Please provide your email and password</p>
		<div class="content">

			<div class="input-group">
				<span class="input-group-addon">
					<i class="material-icons">email</i>
				</span>
				<input type="text" class="form-control" name="email" placeholder="Email...">
			</div>

			<div class="input-group">
				<span class="input-group-addon">
					<i class="material-icons">lock_outline</i>
				</span>
				<input type="password" placeholder="Password..." name="password" class="form-control" />
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="optionsCheckboxes">
					Remember me
				</label>
			</div> 
		</div>
		<div class="footer text-center">
			<button type="submit" class="btn btn-simple btn-primary btn-lg">Login</button>

			Don't have an accout ? 
			<a href="{{ route('register') }}" class="btn btn-simple btn-primary btn-lg">Create un account</a>
		</div>
	</form>
</div>

@endsection

