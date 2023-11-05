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
                    <form action="{{ route('admin/add-car') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        
                        <input type="text" class="form-control field @error('carname') is-invalid @enderror" name="carname" id="textfield2" placeholder="Car Name"><br>
                        <input type="text" class="fform-control field @error('person') is-invalid @enderror" name="person" id="textfield3" placeholder="Person"><br>
                        <input type="number" class="form-control field @error('price') is-invalid @enderror" id="textfield1" name="price" placeholder="price"><br>
                        <input type="file" id="file-upload" class="fileCar" name="image" accept="image/*">


                        <input type="submit" class="submit text-center" value="Add Car">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

@stop