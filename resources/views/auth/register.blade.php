@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="title">Register For Free</div>
    <div class="content">
    <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
				@csrf 
        <div class="user-details">
        <div class="row">
        <div class="col-6">
        <div class="input-box">
            <span class="details">Full Name</span>
            <input id="name" type="text" class="form-control @error('first name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <!-- <input type="text" placeholder="Enter your first name" required> -->
          </div>
        </div>
        </div>
        <!-- <div class="row">
            <div class="col-6">
            <div class="input-box">
            <span class="details">Last Name</span>
            <input id="name" type="text" class="form-control @error('last name') is-invalid @enderror" name="last name" value="{{ old('last name') }}" required autocomplete="last name" placeholder="Enter your last name" autofocus>

                                @error('last name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
            </div>
        </div> -->
        <div class="row"> 
             <div class="col-6">
             <div class="input-box">
            <span class="details">Phone Number</span>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="number" placeholder="Enter your number" autofocus>

            @error('number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
           @enderror
            <!-- <input type="text" placeholder="Enter your number" required> -->

          </div>
        </div>
             </div>
           
          <div class="row">
            <div class="col-6">
          <div class="input-box">
            <span class="details">Email</span>
            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <!-- <input type="text" placeholder="Enter your email" required> -->
        </div>
        </div>
          </div>
          </div>
          <div class="row">
            <div class="col-6">
          <div class="input-box">
            <span class="details">Password</span><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">

                   @error('password')
                  <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            <!-- <input type="text" placeholder="Enter your password" required> -->
          </div>
          </div>
          </div>

                     
          <div class="row">
            <div class="col-6">
          <div class="input-box">
            <span class="details">Confirm Password</span>
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Enter your password" required autocomplete="password">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        </div>
          </div>
          </div>

                     
          <div class="row">
            <div class="col-6">
                <div class="input-box">
                    <div class-="custom-select"></div>
                    <span class="details">Country</span>
                    <select name="country">
                      <option value="">Select Country</option>
                      <option value="KE">Kenya</option>
                      <option value="NI">Nigeria</option>
                      <option value="GH">Ghana</option>
                    </select required>
                    <!-- <span class="details">Country</span>
                    <input type="text" placeholder="Enter your country" required> -->
                  </div>
          </div>
          </div>


        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
      <p>
        By clicking the Register button,you agree to our <br />
        <a href="#">Terms and Condition</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login">Login here</a>
    </p>
    </div>
  </div>


 <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --> 
@endsection
