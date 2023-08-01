<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/cs/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    @section('background')

    @show
    <div class="content">
        @yield('content')

    </div>
</body>

</html>