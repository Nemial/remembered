<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token"/>

    <title>Remembered</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <header class="d-flex bg-dark text-white justify-content-center container-fluid">
        <nav class="navbar m-auto navbar-dark">
            <div class="container">

            </div>
            <h3 class="fst-italic">
                Remember, don`t forget
            </h3>
            <div class="container">

            </div>
        </nav>
    </header>
    @yield('content')
</div>
</body>
</html>
