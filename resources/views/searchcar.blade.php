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
          <span class="search-icon"><i class="fas fa-search"></i></span>
          <input type="text" placeholder="Search">
          <button type="cancel"><i class="fa-solid fa-x"></i></button>
        </div>
        <div class="subtitle">Based on your history</div>
      </div>
      <div class="card-container">


        <div class="card">
          <img src="{{ asset('assets/img/car1.png') }}" alt="">
          <div class="card-content">
            <h3>Pajero<i class="fa-regular fa-heart"></i></h3>
            <div class="info">
              <p><i class="fa-regular fa-user"></i>6 Persons</p>
              <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
            </div>
            <button class="btn">Add to cart</button>
          </div>
        </div>
        <div class="card">
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
        </div>
      </div>
    </div>

  </div>

</div>

@stop