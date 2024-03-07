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
    <!-- OWN CSS -->
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/product.css" />
    <link rel="stylesheet" href="./assets/css/team.css" />
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="stylesheet" href="./assets/css/request-demo.css" />
{{--    <link rel="stylesheet" href="./assets/css/erp.css" />--}}

    <!--  bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- font css -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
@include('layouts.user.header')
<div>
    @yield('user-content')
</div>
@include('layouts.user.footer')
</body>
</html>
