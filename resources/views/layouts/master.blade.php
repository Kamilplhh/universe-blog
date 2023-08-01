<html>

<head>
    <title>🌑🌒🌓🌔🌕</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
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
            <i class="fa-solid fa-bars fa-2xl" id="naviButton"></i>
        </div>
        @yield('content')

    </div>
</body>

</html>