<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        // if ($user->gambar == null || $user->jenis_kelamin == null || $user->latitude == null || $user->longitude == null) {
        //     return redirect()->route('user.profile')->with('message', "Silakan lengkapi identitas anda!");
        // }
        // else if ($user->nik == null || $user->foto_ktp == null || $user->foto_user_ktp == null) {
        //     return redirect()->route('user.profile')->with('message', "Silakan lengkapi data diri anda!");
        // }
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
