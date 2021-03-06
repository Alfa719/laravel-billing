<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
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
        <div class="card">
            <div class="card-header text-center">
                <a href="{{ route('welcome') }}">E-BILLING</a>
            </div>
            <div class="card-body">
                <form>
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required=""
                            placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Reset
                            Password</a></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
