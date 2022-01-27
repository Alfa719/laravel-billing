<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image',
            'nama'=> 'required',
            'email' => 'email|required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'latitude' => 'numeric|required',
            'longitude' => 'numeric|required',
            'nik' => 'numeric|required',
            'foto_ktp' => 'required',
            'foto_user_ktp' => 'required'
        ]);
        $data['status'] = 'check';
        User::create($data);
    }
}
