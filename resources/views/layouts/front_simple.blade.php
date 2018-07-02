<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="img/ico" href="{{asset('images/favicon.ico')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Rambla:400,700,400italic,700italic%7CLato:400,700%7CPoiret+One%7CTenor+Sans%7CJosefin+Sans:400,600,600italic%7CArizonia'
          rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body style="background: #ffffff;">
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
@yield('js')
</body>
</html>