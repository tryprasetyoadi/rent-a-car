@extends('layouts.default')
@section('content')

<div class="container">
    <div class="d-flex">
        <div> @include('includes.header')</div>
        <div class="w-100" style="padding-left: 250px;">

            <div class="header">
                <div class="title">
                    <h4 style="font-weight: bold;">Rating</h4>
                </div>
                <div class="icon-container-loc">
                    <i class="fa fa-shopping-cart" style="font-size: 20px;"></i>
                    <i class="fa-regular fa-user" style="font-size: 20px;"></i>
                </div>
            </div>
            @forelse($histories as $history)
            <div class="card-container-rating">

                <div class="card-rating">

                    <div class="card-content-rat">
                        <p>Transaction ID : #{{$history->id}}<br>Car Name : {{$history->car_name}}<br>Payment Method : {{$history->payment_methods}}</p>
                        <div class="info-rating">
                            <i class="icon far fa-star" data-user-id="{{$history->id_user}}" data-history-id="{{ $history->id }}"></i>
                            <i class="icon far fa-star" data-user-id="{{$history->id_user}}" data-history-id="{{ $history->id }}"></i>
                            <i class="icon far fa-star" data-user-id="{{$history->id_user}}" data-history-id="{{ $history->id }}"></i>
                            <i class="icon far fa-star" data-user-id="{{$history->id_user}}" data-history-id="{{ $history->id }}"></i>
                            <i class="icon far fa-star" data-user-id="{{$history->id_user}}" data-history-id="{{ $history->id }}"></i>
                        </div>
                        <input id="comment" type="text" style="width: 300px; height: 100px; border-radius: 30px;"><br>
                        <button class="btn" onclick="submit()">Give Rating</button>
                    </div>

                </div>

            </div>
            @empty
            <h3 class="text-center">Data is Empty</h3>
            @endforelse
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    var lastIndexClicked = -1;
                    var historyID = $(this).data('history-id');
                    var userId = $(this).data('user-id');
                    var comment = document.getElementById('comment');
                    // Tambahkan event click pada ikon
                    $('.icon').click(function() {
                        var index = $(this).index();

                        // If a star below a previously clicked star is clicked, reset the above star to 'far'
                        if (lastIndexClicked > index) {
                            for (var i = lastIndexClicked; i >= index; i--) {
                                $('.icon').eq(i).removeClass('fas').addClass('far');
                            }
                        }

                        // Fill stars up to the selected icon
                        for (var i = 0; i <= index; i++) {
                            $('.icon').eq(i).removeClass('far').addClass('fas');
                        }

                        lastIndexClicked = index;
                    });
                });

                function submit() {
                    $.ajax({
                        type: 'POST',
                        url: '/submit-rating', // Replace with your Laravel route or URL
                        data: {
                            rating: lastIndexClicked,
                            car_id: historyID,
                            user_id: userID,
                            comment: comment,
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

                }
            </script>

        </div>
    </div>
</div>

</div>

</div>

@stop