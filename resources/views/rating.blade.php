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
                        <form action="{{ route('/submit-rating') }}" method="POST">
                            <p>Transaction ID : #{{$history->id}}<br>Car Name : {{$history->car_name}}<br>Payment Method : {{$history->payment_methods}}</p>
                            @csrf
                            <div class="info-rating">
                                <input type="hidden" name="id_car" value="{{$history->id_car}}">
                                <input type="hidden" name="id_user" value="{{$history->id_user}}">
                                <i class="icon far fa-star"></i>
                                <i class="icon far fa-star"></i>
                                <i class="icon far fa-star"></i>
                                <i class="icon far fa-star"></i>
                                <i class="icon far fa-star"></i>
                                <input type="hidden" name="rating" id="rating">
                            </div>
                            <input id="comment" name="comment" type="text" style="width: 300px; height: 100px; border-radius: 30px;"><br>
                            <button type="submit" class="btn" id="submit">Give Rating</button>
                        </form>
                    </div>

                </div>

            </div>
            @empty
            <h3 class="text-center">Data is Empty</h3>
            @endforelse
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                let lastIndexClicked = -1;
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                let carID = $(this).data('car-id');
                let userID = $(this).data('user-id');
                let comment = document.getElementById('comment');

                $(document).ready(function() {


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
                        document.getElementById("rating").value = lastIndexClicked - 1;
                    });




                });
            </script>

        </div>
    </div>
</div>

</div>

</div>

@stop