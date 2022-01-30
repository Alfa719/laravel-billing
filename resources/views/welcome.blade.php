<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alfa Code">
    <title>E-Billing</title>
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
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <h3>E-Billing Alfa</h3>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Button -->
                @auth()
                    <a class="navbar-btn btn btn-sm btn-outline-info ml-auto d-none d-md-inline-block"
                        href="{{ route('user.dashboard') }}">
                        Dashboard
                    </a>
                @else
                    @if (Route::has('login'))
                        <a class="navbar-btn btn btn-sm btn-primary d-none d-md-inline-block ml-auto"
                            href="{{ route('login') }}">
                            Sign In
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a class="navbar-btn btn btn-sm btn-warning d-none d-md-inline-block"
                            href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
                <!-- Mobile button -->
                <div class="d-lg-none d-md-none text-center">
                    @auth()
                        <a class="btn btn-sm btn-block btn-outline-primary my-1" href="{{ route('user.dashboard') }}">
                            Dashboard
                        </a>
                    @else
                        @if (Route::has('login'))
                            <a class="btn btn-sm btn-primary my-1" href="{{ route('login') }}">
                                Sign In
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a class="btn btn-sm btn-warning my-1" href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth


                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-5">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-3.svg"
                            class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        It's time to choose your <strong class="text-primary">internet speed</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quam deleniti ullam optio,
                        consequatur natus porro? Repellendus libero ducimus enim.
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-icon">
                            <span class="btn-inner--text">Join With Us Now</span><span class="btn-inner--icon">
                                <i data-feather="arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <span class="badge badge-soft-success badge-pill badge-lg">
                        Get started
                    </span>
                    <h2 class=" mt-4">Carefuly crafted components ready to use in your project</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Use Atomic Design to build components, sections and, then, pages.</p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-5.svg" class="img-fluid img-center"
                                    style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Unleash you creativity</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and
                                pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-6.svg" class="img-fluid img-center"
                                    style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Get more results</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and
                                pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-7.svg" class="img-fluid img-center"
                                    style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Increase your audience</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and
                                pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-6 order-lg-2 ml-lg-auto pl-lg-6">
                    <!-- Heading -->
                    <h5 class="h2 mt-4">We deliver the high quality end results you need</h5>
                    <!-- Text -->
                    <p class="lead lh-190 my-4">
                        With Quick you get components and examples, including tons of variables that will help you
                        customize this theme with ease.
                    </p>
                    <!-- List -->
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Built with customization and ease-of-use at its
                                        core</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Quality design and thoughfully crafted code</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <!-- Image -->
                    <div class="position-relative zindex-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-2.svg"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve"
                class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                Follow This Route To Join US
                            </h2>
                            <h4 class="text-white mt-3">Choose your best speed!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row">
                <div class="col-xl-10 col-sm-6 mt-n9 mx-auto">
                    <div id="accordion-1" class="accordion accordion-stacked">
                        <!-- Accordion card 1 -->
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-1" data-toggle="collapse" role="button"
                                data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0 text-white"><i data-feather="user-plus"
                                        class="mr-3"></i>Register Yourself!</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, sint repellat!
                                        Architecto veritatis soluta porro dolores similique voluptatem ipsum sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-3" data-toggle="collapse" role="button"
                                data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0 text-white"><i data-feather="mail" class="mr-3"></i>Check
                                    Your Email For Verification!</h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, sint repellat!
                                        Architecto veritatis soluta porro dolores similique voluptatem ipsum sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-2" data-toggle="collapse" role="button"
                                data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0 text-white"><i data-feather="edit" class="mr-3"></i>Complete
                                    Your Profile!</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quam sequi alias
                                        quia tenetur vel animi vitae, incidunt eveniet dicta illo. Aspernatur quas rerum
                                        doloribus? Aliquid doloribus magnam distinctio beatae?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-4" data-toggle="collapse" role="button"
                                data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="mb-0 text-white"><i data-feather="user-check"
                                        class="mr-3"></i>Wait For Admin To Check Your Profile!</h6>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quam sequi alias
                                        quia tenetur vel animi vitae, incidunt eveniet dicta illo. Aspernatur quas rerum
                                        doloribus? Aliquid doloribus magnam distinctio beatae?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-5" data-toggle="collapse" role="button"
                                data-target="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">
                                <h6 class="mb-0 text-white"><i data-feather="rss" class="mr-3"></i>Choose
                                    Your Speed!</h6>
                            </div>
                            <div id="collapse-1-5" class="collapse" aria-labelledby="heading-1-5"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quam sequi alias
                                        quia tenetur vel animi vitae, incidunt eveniet dicta illo. Aspernatur quas rerum
                                        doloribus? Aliquid doloribus magnam distinctio beatae?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-6" data-toggle="collapse" role="button"
                                data-target="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6">
                                <h6 class="mb-0 text-white"><i data-feather="credit-card"
                                        class="mr-3"></i>Pay Your Product!</h6>
                            </div>
                            <div id="collapse-1-6" class="collapse" aria-labelledby="heading-1-6"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quam sequi alias
                                        quia tenetur vel animi vitae, incidunt eveniet dicta illo. Aspernatur quas rerum
                                        doloribus? Aliquid doloribus magnam distinctio beatae?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-gradient-primary">
                            <div class="card-header py-3" id="heading-1-7" data-toggle="collapse" role="button"
                                data-target="#collapse-1-7" aria-expanded="false" aria-controls="collapse-1-7">
                                <h6 class="mb-0 text-white"><i data-feather="globe" class="mr-3"></i>Enjoy
                                    Our Services!</h6>
                            </div>
                            <div id="collapse-1-7" class="collapse" aria-labelledby="heading-1-7"
                                data-parent="#accordion-1">
                                <div class="card-body bg-white text-dark">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quam sequi alias
                                        quia tenetur vel animi vitae, incidunt eveniet dicta illo. Aspernatur quas rerum
                                        doloribus? Aliquid doloribus magnam distinctio beatae?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <!-- Features -->
            <div class="row mx-lg-n4">
                <!-- Features - Col 1 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">100% Responsive</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Based on Bootstrap 4</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Built with SASS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">300+ components</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">23+ widgets</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Bootstrap Flexbox Grid</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features - Col 3 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Animate CSS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Integrated plugins</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Smart HTML markup</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                    viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve"
                    class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="https://github.com/alfa719" target="_blank">
                            <h3 class="text-primary">E-Billing Alfa</h3>
                        </a>
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dolore ut ullam magni non corporis voluptate omnis distinctio dolorum, velit quaerat,
                            nesciunt et aliquam nam sapiente! Non perspiciatis nemo assumenda tenetur!</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/alfa719" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/neverlikethis_song"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-12">
                        <div class="copyright text-sm font-weight-bold text-center">
                            &copy; 2022 <a class="font-weight-bold" target="_blank">Alfa Code</a>. All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
