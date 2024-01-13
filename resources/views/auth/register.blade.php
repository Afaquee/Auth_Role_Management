@extends('layouts.auth_master')
@section('heading') Register @endsection
@section('content')
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                    <form method="POST" class="row g-3 needs-validation" novalidate action="{{ route('register') }}">
                        @csrf
                        <div class="col-12">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input id="yourName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @else
                                <div class="invalid-feedback">Please, enter your name!</div>
                            @endif
                        </div>

                        <div class="col-12">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <input id="yourEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @else
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            @endif
                        </div>

                        <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input id="yourPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @else
                                <div class="invalid-feedback">Please enter your password!</div>
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
@endsection
