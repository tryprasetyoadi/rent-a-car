@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">
        <div> @include('includes.header')</div>
        <div class="w-100" style="padding-left: 250px;">
            <div class="header">
                <div class="update-title">
                    <h4>Edit Profile</h4>
                </div>
                <div class="update-form">
                    <label for="file-upload" class="file-label">Add Profile Picture</label>
                    <input type="file" id="file-upload" class="file-input" accept="image/*" style="display: none;">
                    <input type="text" class="form-control" id="textfield2" placeholder="Name"><br>
                    <input type="text" class="form-control" id="textfield3" placeholder="UserID"><br>
                    <input type="email" class="form-control" id="textfield1" placeholder="Email"><br>
                    <input type="password" class="form-control" id="textfield4" placeholder="Password"><br>
                    <a href="login.html"><button class="Button1">Update Profile</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

@stop