@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Outer Row -->
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12 col-md-9">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">
                                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                                    </div>
                                                    
                                                    <!-- Login Form -->
                                                    <div class="form-group">
                                                        <input type="email" class="form-control form-control-user"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus
                                                            placeholder="Enter Email Address...">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-user"
                                                            name="password" required autocomplete="current-password"
                                                            placeholder="Password">
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox small">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        Login
                                                    </button>
                                                    
                                                    <hr>
                                                    
                                                   
                                                    <a href="login/google" class="btn btn-google btn-user btn-block">
                                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                                    </a>
                                                    <a href="login/facebook" class="btn btn-facebook btn-user btn-block">
                                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
