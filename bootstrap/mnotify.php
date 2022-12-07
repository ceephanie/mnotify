<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>










<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
		<div class="card-header">Registration</div>
		<div class="card-body">
			<form action="{{ route('sample.validate_registration') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="first name" class="form-control" placeholder=" First Name" />
					@if($errors->has('first name'))
						<span class="text-danger">{{ $errors->first('first name') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="last name" class="form-control" placeholder="Last Name" />
					@if($errors->has('last name'))
						<span class="text-danger">{{ $errors->first('last name') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="phone number" class="form-control" placeholder="Phone Number" />
					@if($errors->has('phone number'))
						<span class="text-danger">{{ $errors->first('phone number') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="country" class="form-control" placeholder="Country" />
					@if($errors->has('country'))
						<span class="text-danger">{{ $errors->first('contry') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="confirm password" class="form-control" placeholder="Confirm Password" />
					@if($errors->has('confirm password'))
						<span class="text-danger">{{ $errors->first('confirm password') }}</span>
					@endif
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">Register</button>
				</div>
                <p>
        By clicking the Register button,you agree to our <br />
        <a href="#">Terms and Condition</a>
      </p>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>
			</form>
		</div>
	</div>
</div>

@endsection('content')
