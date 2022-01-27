<!doctype html>
<html lang="in">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
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
            padding-top: 20px;
            padding-bottom: 20px;
        }

    </style>
</head>

<body>
    <form class="splash-container" action="{{ route('register') }}" method="POST">
        @csrf
        @method('POST')
        <div class="card rounded">
            <div class="card-header">
                Registration <a href="{{ route('welcome') }}">E-BILLING</a>
            </div>
            <div class="card-body">
                @error('nama')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama" required placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required=""
                        placeholder="Your E-mail">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" type="password" required=""
                        placeholder="Your Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" required placeholder="Confirm Password"
                        name="password_confirmation">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register Account</button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{ route('login') }}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>


</html>
