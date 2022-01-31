<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->gambar == null || $user->jenis_kelamin == null || $user->latitude == null || $user->longitude == null || $user->nomor_hp == null) {
            return redirect()->route('user.profile')->with('messageUser', "Lengkapi data diri anda!");
        }
        if ($user->nik == null || $user->foto_ktp == null || $user->foto_user_ktp == null) {
            return redirect()->route('user.profile')->with('messageDocument', "Lengkapi dokumen anda!");
        }
        return view('user.dashboard');
    }
    public function updateprofile(User $user, ProfileRequest $request)
    {
        $data = $request->only(['nama', 'gambar', 'jenis_kelamin', 'nomor_hp', 'latitude', 'longitude']);
        if ($request->hasFile('gambar')) {
            if ($user->gambar !== null) @unlink(public_path($user->gambar));

            $extension = $request->file('gambar')->extension();
            $imageName = "profile-". time() . '.' . $extension;
            $store = $request->file('gambar')->storeAs('public/image/user', $imageName);
            $path = Storage::url($store);
        }else {
            $path = $user->gambar;
        }
        $data['gambar'] = $path;

        $user->update($data);
        return redirect()->route('user.profile')->with('messageUser', "Profil anda berhasil diperbarui!");
    }
    public function updatedocument(User $user, DocumentRequest $request)
    {
        $data = $request->only(['nik', 'foto_ktp', 'foto_user_ktp']);
        if ($request->hasFile('foto_ktp')) {
            if ($user->foto_ktp !== null) @unlink(public_path($user->foto_ktp));
            $extension = $request->file('foto_ktp')->extension();
            $imageName = "ktp-". time() . '.' . $extension;
            $store = $request->file('foto_ktp')->storeAs('public/image/ktp', $imageName);
            $pathKtp = Storage::url($store);
        }else {
            $pathKtp = $user->foto_ktp;
        }
        if ($request->hasFile('foto_user_ktp')) {
            if ($user->foto_user_ktp !== null) @unlink(public_path($user->foto_user_ktp));
            $extension = $request->file('foto_user_ktp')->extension();
            $imageName = "user-ktp-". time() . '.' . $extension;
            $store = $request->file('foto_user_ktp')->storeAs('public/image/user-ktp', $imageName);
            $pathUserKtp = Storage::url($store);
        }else {
            $pathUserKtp = $user->foto_user_ktp;
        }
        $data['foto_ktp'] = $pathKtp;
        $data['foto_user_ktp'] = $pathUserKtp;

        $user->update($data);
        return redirect()->route('user.profile')->with('messageDocument', "Profil anda berhasil diperbarui!");
    }
    public function profile()
    {
        return view('user.profile');
    }
}
