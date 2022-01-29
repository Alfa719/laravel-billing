@extends('layouts.user')

@section('content')
<div class="slice py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('resent'))
                    <div class="alert alert-warning" role="alert">
                        <strong>Your verification link has been resent to your email address!</strong>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        <strong>A fresh verification link has been sent to your email address!</strong>
                        <form action="{{ route('verification.resend') }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-dark text-sm">Click here to resent verification!</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('title', 'User Verification')
