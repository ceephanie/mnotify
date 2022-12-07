@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="title">Login</div>
    <div class="content">
    <form method="POST" action="{{ route('login') }}">
     @csrf
        <div class="user-details">
          
          <div class="row">
            <div class="col-12">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  </div>
            </div>
          
            <div class="col-12">
                <div class="input-box">
                    <span class="details">Password</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
            </div>
           
              <div class="button">
                <input type="submit" value="Login">
              </div>

          </div>
        
          </div>
        </form>
      <p class="para-2">
       Forgot Password? Click <a href="{{ route('password.request') }}">here</a> to reset your password.</p>
       <div>
       <p>Don't have an account? <a href="register">Register Here</a>
      </p></div>
@endsection
