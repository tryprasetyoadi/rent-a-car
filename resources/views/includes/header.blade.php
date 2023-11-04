<main>
    <div class="sidebar d-flex">
        <ul>
            <li><a href="/profile"><i class="fa-solid fa-user"></i>Profile</a></li>
            <li><a href="/search/car"><i class="fa-solid fa-magnifying-glass"></i>Search Car</a></li>
            <li><a href="/wishlist"><i class="fa-regular fa-heart"></i>Wishlist</a></li>
            <li><a href="/booking"><i class="fa-solid fa-gauge-high"></i>Rent-a-Car</a></li>
            <li><a href="/transaction"><i class="fa-solid fa-dollar-sign"></i>Transaction</a></li>
            <li><a href=""><i class="fa-regular fa-star"></i>Rating</a></li>
            @if(Auth::user())
            @if(Auth::user()->levelling==0)
            <li><a href="/admin"><i class="fa-solid fa-user"></i>Add Car</a></li>
            @endif
            @endif
            <li>
                <!-- <form action="{{ route('logout') }}" method="post">
                    @csrf -->
                <a href="#" onclick="logout()"><i class="fa fa-sign-out"></i>Logout</a>
                <!-- </form> -->

            </li>

        </ul>
        <form style="display: none; " action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" id="logoutButton"><i class="fa fa-sign-out"></i>Logout</button>

        </form>
        <script>
            function logout() {
                $('#logoutButton').click();
            }
        </script>
    </div>
</main>