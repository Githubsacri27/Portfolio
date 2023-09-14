<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Rubén-Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/style.css')}}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ url('css/skins/yellow.css')}}" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="{{ url('js/modernizr.custom.js')}}"></script>
</head>

<body class="{!! !empty($className) ? $className : '' !!}">
    @include('layouts.sidebar')


    @yield('content')

    <!-- JS Files -->
    <script src="{{ url('js/jquery-3.5.0.min.js')}}"></script>
    <script src="{{ url('js/fm.revealator.jquery.min.js')}}"></script>
    <script src="{{ url('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ url('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ url('js/classie.js')}}"></script>
    <script src="{{ url('js/cbpGridGallery.js')}}"></script>
    <script src="{{ url('js/jquery.hoverdir.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/custom.js')}}"></script>

</body>

</html>