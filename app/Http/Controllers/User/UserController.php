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
        $user = Auth::user();
        if ($user->gambar == null || $user->jenis_kelamin == null || $user->latitude == null || $user->longitude == null) {
            return redirect()->route('user.profile')->with('message', "Silakan lengkapi identitas anda!");
        }
        else if ($user->nik == null || $user->foto_ktp == null || $user->foto_user_ktp == null) {
            return redirect()->route('user.profile')->with('message', "Silakan update data diri anda!");
        }
        return view('user.dashboard');
    }
    public function updateprofile(User $user, Request $request)
    {
        $data = $request->validate([
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        $user->update($data);
        return redirect()->route('user.profile')->with('message', "Silakan update data anda!");
    }
    public function profile()
    {
        $message = "Silakan perbarui profil anda!";
        return view('user.profile', compact('message'));
    }
}
