<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(Request $request)
    {
        
    }
    public function verifyUser()
    {
        $usersCheck = User::where('status', 'check')->get();
        dd($usersCheck);
    }
}
