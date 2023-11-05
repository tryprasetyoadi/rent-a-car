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
                    <form action="{{ route('updateUser') }}" method="post">
                        @csrf
                        
                        <input type="file" id="file-upload" class="file-input" accept="image/*" style="display: none;">
                        <input type="text" class="form-control field @error('name') is-invalid @enderror" name="name" id="textfield2" placeholder="Name"><br>
                        <input type="text" class="fform-control field @error('username') is-invalid @enderror" name="username" id="textfield3" placeholder="UserID"><br>
                        <input type="email" class="form-control field @error('email') is-invalid @enderror" id="textfield1" name="email" placeholder="Email"><br>
                        <input type="password" class="form-control field @error('password') is-invalid @enderror" id="textfield4" name="password" placeholder="Password"><br>


                        <input type="submit" class="submit text-center" value="Update Profile">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

@stop