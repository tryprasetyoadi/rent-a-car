<main>
    <div class="sidebar d-flex">
        <ul>
            <li><a href="/"><i class="fa-solid fa-user"></i>Profile</a></li>
            <li><a href="/search/car"><i class="fa-solid fa-magnifying-glass"></i>Search Car</a></li>
            <li><a href="/wishlist"><i class="fa-regular fa-heart"></i>Wishlist</a></li>
            <li><a href="/booking"><i class="fa-solid fa-gauge-high"></i>Rent-a-Car</a></li>
            <li><a href=""><i class="fa-solid fa-dollar-sign"></i>Transaction</a></li>
            <li><a href=""><i class="fa-regular fa-star"></i>Rating</a></li>
            @if(Auth::user())
            @if(Auth::user()->levelling==0)
            <li><a href=""><i class="fa-regular fa-star"></i>Add Car</a></li>
            @endif
            @endif
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <li><button type="submit"><i class="fa-regular fa-logoutr"></i>Logout</button></li>
            </form>

        </ul>
    </div>
</main>