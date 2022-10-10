<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('metaTitle', 'DC Comics')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        @include('partials.header')
        @include('partials.main-comics')
        @include('partials.footer')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>