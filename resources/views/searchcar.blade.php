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
          <span class="search-icon"><i class="fa fa-search"></i></span>
          <form action="{{route('/search-car')}}" method="get">
            <input type="text" placeholder="Search" name="search" value="{{ old('search') }}">
            <input type="submit" value="search">
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
            <h3>{{$car->name}}<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i> {{$car->person}} Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp. {{$car->harga}}/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div>
        @empty
        <div class="no-data">No data available.</div>
        @endforelse
        <!-- <div class="card">
          <img src="{{ asset('assets/img/car2.png') }}" alt="">
          <div class="card-content">
            <h3>Hiace<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i>6 Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/car5.png') }}" alt="">
          <div class="card-content">
            <h3>Sigra<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i>6 Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/car6.png') }}" alt="">
          <div class="card-content">
            <h3>Xpander<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i>6 Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/car7.png') }}" alt="">
          <div class="card-content">
            <h3>Calya<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i>6 Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div> -->
      </div>
    </div>

  </div>

</div>

@stop