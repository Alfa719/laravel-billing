<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ route('welcome') }}">
            <h3>E-Billing Alfa</h3>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Overview</a>
                </li>
                <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu dropdown-menu-single">
                        <a href="index.html" class="dropdown-item">Homepage</a>
                        <a href="about.html" class="dropdown-item">About us</a>
                        <a href="contact.html" class="dropdown-item">Contact</a>
                        <div class="dropdown-divider"></div>
                        <a href="login.html" class="dropdown-item">Login</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../docs/index.html">Docs</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="post" class="d-inline">
                @csrf
                @method('POST')
                <button type="submit" class="navbar-btn btn btn-sm btn-outline-danger d-none d-lg-inline-block ml-3">Sign Out</button>
            </form>

            <!-- Mobile button -->
            <div class="d-lg-none text-center">
                <form action="{{ route('logout') }}" method="post" class="d-inline">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-block btn-sm btn-danger">Sign Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
