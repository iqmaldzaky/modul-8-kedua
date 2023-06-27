@extends('layouts.appkedua')

@section('content')
<div class="p-3 mb-2 bg-primary">
<div class="container">
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-hexagon-fill fs-1 text-primary"></i>
                    <div class="fw-bold">
                        <span><h4>Employee Data Master</h4></span>
                    </div>
                    <br>
                    <hr>
                    <br>
                    {{-- <div class="card"> --}}
                        {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="col-md-13">

                                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>

                                <div>
                                    {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Enter Your Password') }}</label> --}}

                                    <div class="col-md-13">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                                <br>
                                <hr>
                                <br>
                                <div>
                                    <div class="col-md-13">
                                        <button type="submit" class="btn btn-primary btn-md btn-block w-20">
                                            <i class="bi bi-box-arrow-in-right"></i>
                                            {{ __('Log In') }}
                                        </button>

                                        {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
