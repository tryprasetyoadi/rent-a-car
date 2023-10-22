@extends('layouts.default')
@section('content')
<section class="login d-flex">
    <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="header">
                    <h1>Log in to your account</h1>
                </div>
                <div class="login-form">
                    <input type="text" class="form-control" id="textfield1" placeholder="UserID"><br>
                    <input type="password" class="form-control" id="textfield2" placeholder="Password"><br>
                    <a href="sidebar.html"><button class="button1">Login</button></a>
                    <p class="signin text-center">Don't have Account?
                        <a href="index.html" class="text-decoration-none">Create an account</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="login-right w-50 h-100">
        <div class="picture">
            <img src="img/rental.png">
            <h5>Make Your Trip Enjoyable with Rent-A-Car!</h5>
        </div>
    </div>

</section>
@stop