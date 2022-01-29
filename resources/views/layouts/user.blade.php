<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alfa Code">
    <title>@yield('title')</title>
    <!-- Preloader -->
    @include('layouts.header-user')
</head>

<body>
    <x-navbar-user></x-navbar-user>
    @yield('content')
    @include('layouts.footer-user')
</body>

</html>
