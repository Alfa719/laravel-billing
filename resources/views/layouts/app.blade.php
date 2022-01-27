<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.style')
    @stack('styles')
    <title>@yield('title')</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <x-navbar-admin></x-navbar-admin>
        @include('layouts.sidebar')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.script')
    @stack('scripts')
</body>

</html>
