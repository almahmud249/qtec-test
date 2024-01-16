<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{Session::get('direction')}}" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->

    <title>@yield('title')</title>
    <meta name="_token" content="{{csrf_token()}}">
    <!--to make http ajax request to https-->
    <!--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/common.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
</head>

<body class="footer-offset">
<div class="main_container">
        @include('layouts.partials.sidebar')
    <!-- navbar start  -->
    <div class="body_container">
        @include('layouts.partials.header')
        @yield('content')

    </div>

</div>

<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>

</body>
</html>
