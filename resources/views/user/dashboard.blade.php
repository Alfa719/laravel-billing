@extends('layouts.user')
@section('title', 'E-Billing')

@section('content')
<div class="slice py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Hello From Dashboard User.
                <a href="dropdown_user_account">Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown_user_account">
                    <h6 class="dropdown-header">User menu</h6>
                    <a class="dropdown-item" href="#">
                        <span class="float-right badge badge-primary">4</span>
                        <i class="fas fa-envelope text-primary"></i>Messages
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog text-primary"></i>Settings
                    </a>
                    <div class="dropdown-divider" role="presentation"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt text-primary"></i>Sign out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
