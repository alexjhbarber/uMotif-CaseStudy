<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>