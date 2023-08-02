<html>

<head>
    <title>🌑🌒🌓🌔🌕</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
</head>

<body>
    @section('background')
    <div id="star-map">
    </div>
    @show

    <div class="content">
        <div class="navigation">
            <div class="navbar">
                <p>Today's planet</p>
                <p>Today's planet</p>
                <p>Today's planet</p>
                <p>Today's planet</p>
            </div>
            <i class="fa-solid fa-bars fa-2xl" id="naviButton"></i>
        </div>
        @yield('content')

    </div>
</body>

</html>