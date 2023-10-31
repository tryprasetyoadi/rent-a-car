<main>
    <div class="sidebar d-flex">
        <ul>
            <li><a href="/"><i class="fa-solid fa-user"></i>Profile</a></li>
            <li><a href="/search/car"><i class="fa-solid fa-magnifying-glass"></i>Search Car</a></li>
            <li><a href="/wishlist"><i class="fa-regular fa-heart"></i>Wishlist</a></li>
            <li><a href="/booking"><i class="fa-solid fa-gauge-high"></i>Rent-a-Car</a></li>
            <li><a href=""><i class="fa-solid fa-dollar-sign"></i>Transaction</a></li>
            <li><a href=""><i class="fa-regular fa-star"></i>Rating</a></li>
            <form action="{{ route('logout') }}" method="post">
                <li><button type="submit"><i class="fa fa-sign-out" ></i>Logout</button></li>
            </form>

        </ul>
    </div>
</main>