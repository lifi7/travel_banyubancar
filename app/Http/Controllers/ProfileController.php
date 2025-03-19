<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maks 2MB
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika ada gambar baru diunggah
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($user->img) {
                Storage::delete($user->img);
            }

            // Simpan gambar baru
            $path = $request->file('img')->store('profile_pictures', 'public');
            $user->img = $path;
        }

        $user->save();


        return redirect()->back()->with('success', 'Profile berhasil diperbarui!');
    }
}
