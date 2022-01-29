<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alfa Code">
    <title>Register E-Billing</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }

    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/quick-website.css') }}" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <a href="{{ route('welcome') }}"
        class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex"
        data-toggle="tooltip" data-placement="right" title="Go back">
        <span class="btn-inner--icon">
            <i data-feather="arrow-left"></i>
        </span>
    </a>
    <!-- Side cover login -->
    <section>
        <div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end"
            data-bg-size="cover" data-bg-position="center">
            <!-- Cover image -->
            <img src="assets/img/theme/light/img-v-2.jpg" alt="Image" class="img-as-bg">
            <!-- Overlay text -->
            <div class="row position-relative zindex-110 p-5">
                <div class="col-md-8 text-center mx-auto">
                    <h5 class="h5 text-white mt-3">The all new Quick is here</h5>
                    <p class="text-white opacity-8">
                        Everything you need to create amazing websites at scale.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-md-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-6">
                            <div>
                                <div class="mb-5">
                                    <h6 class="h3 mb-1">Welcome New User</h6>
                                    <p class="text-muted mb-0">
                                        Sign Up to make an account!
                                    </p>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show text-sm ml-auto" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @enderror
                                    @error('email')
                                        <div class="alert alert-danger alert-dismissible fade show text-sm ml-auto" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @enderror
                                    @error('password')
                                        <div class="alert alert-danger alert-dismissible fade show text-sm ml-auto" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Your Name"
                                                name="nama" autocomplete="off" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="name@example.com"
                                                name="email" autocomplete="off" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="form-control-label">Password</label>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" autocomplete="off" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="form-control-label">Confirm Password</label>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                placeholder="Confirm Password" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                                </form>
                                <div class="py-3 text-center">
                                    <span class="text-sm text-capitalize">Already have an account ? <a
                                            href="{{ route('login') }}">Login Here!</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core JS  -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="assets/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html>
