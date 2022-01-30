<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('welcome') }}">
            <h3>E-Billing Alfa</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mt-4 mt-lg-0 ml-auto mr-lg-5">
                <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->nama }} <i data-feather="chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_user_account">
                        <h6 class="dropdown-header">Account</h6>
                        <a class="dropdown-item" href="#">
                            <span class="float-right badge badge-primary">4</span>
                            <i class="fas fa-envelope text-primary"></i>Messages
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cog text-primary"></i>Settings
                        </a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="#" onclick="$('#logoutForm').submit()">
                            <i class="fas fa-sign-out-alt text-primary"></i>Sign out
                        </a>
                        <form action="{{ route('logout') }}" method="post" class="d-none" id="logoutForm">
                            @csrf
                            @method('POST')
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
