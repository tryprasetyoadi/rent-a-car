@extends('layouts.default')
@section('content')
<section class="login d-flex">
    <div class="login-left   w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="header">
                    <h1>Log in to your account</h1>
                </div>
                <div class="login-form">
                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="email" name="username" value="{{ old('username') }}" placeholder="UserID">
                                @if ($errors->has('username'))
                                <span class="text-danger" style="margin-left: 30px; display: flex; margin-top: 10px;">{{ $errors->first('usrname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="text-danger" style="margin-left: 30px; display: flex; margin-top: 10px;">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                        </div>
                        <p class="signin text-center">Don't have account?
                            <a href="{{ route('register') }}" class="text-decoration-none">Register here!</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="login-right w-50 h-100">
        <div class="picture">
            <img src="{{ asset('assets/img/rental.png') }}">
            <h5>Make Your Trip Enjoyable with Rent-A-Car!</h5>
        </div>
    </div>

</section>
@stop