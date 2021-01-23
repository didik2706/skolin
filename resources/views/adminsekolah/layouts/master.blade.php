<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>Skolin | Cara gampang cari sekolah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('assets\images\fav.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets\css\vendor\plugins.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets\css\style.min.css') }}">
</head>
<body>

    @yield('content')


 <!--====== Ends ======-->
    <!--====== Jquery js ======-->
    <script src="{{ url('assets\js\vendor\jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('assets\js\vendor\modernizr-3.7.1.min.js') }}"></script>
        <script src="{{ url('assets\js\plugin.min.js') }}"></script>
    <!--====== Main Activation  js ======-->
    <script src="{{ url('assets\js\main.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>
    @include('adminsekolah.auth.script')
</body>

</html>