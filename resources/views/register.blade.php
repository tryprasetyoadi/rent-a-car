@extends('layouts.default')
@section('content')
<section class="register d-flex">
    <div class="register-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="header">
                    <h1>Create Account</h1>
                </div>
                <div class="register-form">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="form-group row">



                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">



                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="username">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">



                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="email" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="password" autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>


                        <div class="form-group row">


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm Password">


                        </div>

                        <div class="form-group row">


                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required placeholder="address" autocomplete="address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="signin text-center">Already have an Account?
                        <a href="/login" class="text-decoration-none">Sign in</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="register-right w-50 h-100">
        <div class="picture">
            <img src="{{ asset('assets/img/rental.png') }}">
            <h5>Make Your Trip Enjoyable with Rent-A-Car!</h5>
        </div>
    </div>

</section>
@stop