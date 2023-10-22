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
                    <input type="text" class="form-control" id="textfield2" placeholder="Name"><br>
                    <input type="text" class="form-control" id="textfield3" placeholder="UserID"><br>
                    <input type="email" class="form-control" id="textfield1" placeholder="Email"><br>
                    <input type="password" class="form-control" id="textfield4" placeholder="Password"><br>
                    <a href="login.html"><button class="Button1">Create my account</button></a>
                    <p class="signin text-center">Already have an Account?
                        <a href="login.html" class="text-decoration-none">Sign in</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="register-right w-50 h-100">
        <div class="picture">
            <img src="img/rental.png">
            <h5>Make Your Trip Enjoyable with Rent-A-Car!</h5>
        </div>
    </div>

</section>
@stop