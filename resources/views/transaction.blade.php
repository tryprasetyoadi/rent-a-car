@extends('layouts.default')
@section('content')

<div class="container">
    <div class="d-flex">

        <div class="w-100" style="padding-left: 250px;">
            <div> @include('includes.header')</div>


            <div class="header">
                <div class="title">
                    <img src="{{asset('assets/img/logo.png') }}" style="width:150px;" alt="">
                </div>
                <div class="location-bar">
                    <span class="location-icon"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" placeholder="Location" />
                    <button type="cancel"><i class="fa-solid fa-x"></i></button>
                </div>
                <div class="icon-container-loc">
                    <i class="fa fa-shopping-cart" style="font-size: 20px"></i>
                    <i class="fa-regular fa-user" style="font-size: 20px"></i>
                </div>
                <div class="subtitle">Available car based on your location</div>
            </div>
            @if($transaction!=null)
            <div class="card-container-transaksi">
                <div class="card-content-transaksi">

                    <div class="card-content-info col">
                        <h2>Car Information</h2>
                        <table>
                            <tr>
                                <th>Car Name</th>
                                <th>: </th>
                                <td>{{$transaction->car_name}}</td>
                            </tr>
                            <tr>
                                <th>Capacity</th>
                                <th>: </th>
                                <td>{{$transaction->person}} Persons</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <th>: </th>
                                <td>Rp. {{$transaction->harga}}</td>
                            </tr>
                            <tr>
                                <th>
                                <form action="/transaction/delete/{{$transaction->id}}" method="get">
                                    
                                    <button type="submit" class="btn submit">Mark as done</button>
                                </form>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card-container-transaksi">
                <div class="card-content-transaksi">
                    <div class="card-content-info col">
                        <h2>Renter Information</h2>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>:</th>
                                <td>{{$transaction->user_name}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th>:</th>
                                <td>{{$transaction->address}}</td>
                            </tr>
                            <tr>
                                <th>How Many Days</th>
                                <th>:</th>
                                <td>{{$transaction->days}} Days</td>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <th>:</th>
                                <td>{{$transaction->payment_methods}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @else
            <p class="text-center">Data not Available</p>
            @endif
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        </div>
    </div>
</div>