@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">
        <div> @include('includes.header')</div>
        <div class="w-100" style="padding-left: 250px;">
        <div class="header">
      <div class="title-wish">
        <h4>Wishlist</h4>
      </div>
    <div class="subtitle-wish">Based on what you like
        <div class="icon-container">
            <i class="fa fa-shopping-cart" style="font-size: 20px;"></i>
            <i class="fa-regular fa-user" style="font-size: 20px;"></i>
        </div>
    </div>
    </div>
    <div class="top-card">
        <div class="card">
            <img src="img/car4.png" alt="">
            <div class="card-content">
              <h3>Sigra<i class="fa-solid fa-heart"></i></h3>
              <div class="info">
                <p><i class="fa-regular fa-user"></i>6 Persons</p>
                <p class="price"><i class="fa-solid fa-dollar-sign"></i>Rp.400.000/day</p>
              </div>
              <button class="btn">Add to cart</button>
            </div>
          </div>
    </div>
    <div class="rekomen-text">
        Our Recommendation
    </div>
    <div class="card-container">
      <div class="card">
        <img src="img/car4.png" alt="">
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
        <img src="img/car1.png" alt="">
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
        <img src="img/car2.png" alt="">
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
        <img src="img/car5.png" alt="">
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
        <img src="img/car6.png" alt="">
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
        <img src="img/car7.png" alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </div>
    </div>
</div>

</div>

</div>

@stop