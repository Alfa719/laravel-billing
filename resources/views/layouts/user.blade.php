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

<body class="bg-translucent-secondary">
    <x-navbar-user></x-navbar-user>
    @if (Auth::user()->status === 'check')
        <div class="alert alert-warning alert-flush" role="alert">
            <strong>Peringatan!</strong> Akun anda sedang dalam proses pengecekan admin! Silakan cek kembali data anda!
        </div>
    @endif
    @yield('content')
    @include('layouts.footer-user')
</body>

</html>
