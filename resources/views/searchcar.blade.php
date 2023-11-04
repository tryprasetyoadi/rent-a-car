@extends('layouts.default')
@section('content')

<div class="container">
  <div class="d-flex">
    <div> @include('includes.header')</div>
    <div class="w-100" style="padding-left: 250px;">
      <div class="header">
        <div class="title">
          <h4>Search for car</h4>
        </div>
        <div class="search-bar">
          <span class="search-icon"></span>
          <form action="{{route('/search-car')}}" method="get">
            <input type="text" placeholder="Search" name="search" value="{{ old('search') }}">
            <button type="submit"><i class=" fa fa-search"></i></button>
            <button type="cancel"><i class="fa-solid fa-x"></i></button>
          </form>
        </div>
        <div class="subtitle">Based on your history</div>
      </div>
      <div class="card-container">

        @forelse($cars as $car)
        <div class="card">
          <img src="{{ asset($car->path) }}" alt="">
          <div class="card-content">
            <h3>{{ $car->name }}<i class="icon far fa-heart" data-user-id="{{ Auth::user()->id }}" data-car-id="{{ $car->id }}"></i></h3>

            <div class="info">
              <p><i class="fa-regular fa-user"></i> {{ $car->person}} Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i> Rp.{{$car->harga}}/day</p>
            </div>
            <form action="/transaction/{{$car->id}}" method="get">
              @csrf
              <button type="submit" class="btn">Add to cart</button>
            </form>
          </div>
        </div>

        @empty
        <div class="no-data text-center">No Data Found!</div>

        @endforelse

      </div>
    </div>

  </div>
  <script>
    $(document).ready(function() {
      // Add a click event handler to the heart icon
      $('.icon').click(function() {
        // Get the user_id and car_id from the data attributes
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var userId = $(this).data('user-id');
        var carId = $(this).data('car-id');

        // Check if the icon has the 'far' class
        if ($(this).hasClass('far')) {
          // Change the class to 'fas' to change the icon's appearance
          $(this).removeClass('far').addClass('fas');

          // Send an AJAX request to store the data in the bookmarks table
          $.ajax({
            type: 'POST',
            url: '/add-to-bookmarks', // Replace with your Laravel route or URL
            data: {
              user_id: userId,
              car_id: carId,
              class: 'fas',
            },
            headers: {
              'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
            },
            success: function(response) {
              // Handle the success response if needed
            },
            error: function(error) {
              // Handle errors if the request fails
            }
          });
        } else {
          // Change the class back to 'far'
          $(this).removeClass('fas').addClass('far');
          $.ajax({
            type: 'POST',
            url: '/delete-bookmarks',
            data: {
              user_id: userId,
              car_id: carId,
            },
            headers: {
              'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
            },
            success: function(response) {
              // Handle the success response if needed
            },
            error: function(error) {
              // Handle errors if the request fails
            }
          });
          // Optionally, you can send another AJAX request to remove the data from the bookmarks table
        }
      });
    });
  </script>

</div>

@stop