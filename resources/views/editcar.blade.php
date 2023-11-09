@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">
        <div> @include('includes.header')</div>
        <div class="w-100" style="padding-left: 250px;">
            <div class="header">
                <div class="update-title">
                    <h4>Add Car</h4>
                </div>
                <div class="update-form">
                    <form action="/admin/edit-car/{{$car->id}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <input type="text" value="{{$car->name}}" class="form-control field @error('carname') is-invalid @enderror" name="name" id="textfield2" placeholder="Car Name"><br>
                        <input type="text" value="{{$car->person}}" class="fform-control field @error('person') is-invalid @enderror" name="person" id="textfield3" placeholder="Person"><br>
                        <input type="number" value="{{$car->harga}}" class="form-control field @error('price') is-invalid @enderror" id="textfield1" name="price" placeholder="price"><br>
                        <input type="file" id="file-upload" class="fileCar" name="image" accept="image/*">


                        <input type="submit" class="submit text-center" value="Edit Car">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>