@extends('layouts.default')
@section('content')
@include('includes.header')
<div class="title">
    Rent-A-Car
</div>
<div class="header">
    Edit Profile
</div>
<div class="edit-form">
    <div id="preview-container">
        <img id="image-preview" src="" alt="Profile Picture">
    </div>
    <label for="profile-picture" class="custom-file-upload">
        <span id="file-name">Add Profile Picture</span>
    </label>
    <input type="file" id="profile-picture" name="profile-picture" style="display: none;" onchange="updateFileName()">
    <input type="file" id="profile-picture" name="profile-picture" style="display: none;">
    <input type="text" class="form-control" id="textfield2" placeholder="Name"><br>
    <input type="text" class="form-control" id="textfield3" placeholder="UserID"><br>
    <input type="email" class="form-control" id="textfield1" placeholder="Email"><br>
    <input type="password" class="form-control" id="textfield4" placeholder="Password"><br>
    <a href="profile.html"><button class="button1">Update Profile</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@stop