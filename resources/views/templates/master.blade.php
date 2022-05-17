<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>


        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </body>
</html>