<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Oriper</title>
        <meta name="description" content="">
        <meta name="author" content="User">

        <meta name="viewport" content="width=1024; initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/nivoSlider.css" type="text/css"/>
        <link rel="stylesheet" href="css/global.css" type="text/css"/>

        <script type="text/javascript" src="js/jquery/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="js/jquery/respond.js"></script>
        <script type="text/javascript" src="js/jquery/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    </head>

    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>

</html>