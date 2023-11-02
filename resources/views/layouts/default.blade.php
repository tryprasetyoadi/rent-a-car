<!doctype html>
<html>

<head>
    @include('includes.head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>

    </div>
</body>

</html>