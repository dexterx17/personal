<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title','Proyecto con vue')</title>
</head>
<body>
    <div id="app">
        @include('templates.parcials.header')
        <div class="container">
            @yield('contenido')
        </div>
        @include('templates.parcials.footer')
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>