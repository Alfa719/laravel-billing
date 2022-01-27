<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card rounded">
            <div class="card-header text-center">
                <a href="{{ route('welcome') }}">
                    E-BILLING
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" type="email" placeholder="Email"
                            autocomplete="off" name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('register') }}" class="footer-link">Create An Account</a>
                </div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('password.request') }}" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
