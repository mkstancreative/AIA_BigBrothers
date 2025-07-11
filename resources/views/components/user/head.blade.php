@props([
    'title' => 'My Title',
])

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Page Title -->
    <title>A.I.A Big Brothers | {{ $title }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/images/favicon.png') }}" />
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <!-- SlickNav Css -->
    <link href="{{ asset('assets2/css/slicknav.min.css') }}" rel="stylesheet" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('assets2/css/swiper-bundle.min.css') }}" />
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('assets2/css/all.css') }}" rel="stylesheet" media="screen" />
    <!-- Animated Css -->
    <link href="{{ asset('assets2/css/animate.css') }}" rel="stylesheet" />
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets2/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/plyr.css') }}" />
    <link href="{{ asset('assets2/css/custom.css') }}" rel="stylesheet" media="screen" />
</head>
