<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Tampilkan halaman profil
    public function index()
    {
        return view('user.profile');
    }

    // Update profil pengguna
    public function update(Request $request)
    {
        try {
            $request->validate([
                'name'  => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . Auth::id(),
                'address' => 'required|string|max:255',
                'phone' => 'required|max:15',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' 
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->with('error', 'Gagal memperbarui profil. Periksa kembali data yang dimasukkan.')
            ->withInput()
            ->with('showModal', 'editProfileModal');
        }
    
        try {
            $user = User::findOrFail(Auth::id());
    
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($user->image) {
                    Storage::delete('public/' . $user->image);
                }
    
                // Simpan gambar baru
                $imagePath = $request->file('image')->store('profile_images', 'public');
                $user->image = $imagePath;
            }
    
            // Update data pengguna
            $user->update([
                'name'  => $request->name,
                'email' => $request->email,
                'address'=> $request->address,
                'phone' => $request->phone,
                'image' => $user->image 
            ]);
    
            return back()->with('success', 'Profile updated successfully')
            ;
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while updating the profile. Try again.')
            ;
        }
    }
    
    


    // Ganti password pengguna
    public function changePassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' => 'required',
                'new_password'     => 'required|min:8|confirmed',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->with('showModal', 'changePasswordModal');
        }
    
        $user = User::findOrFail(Auth::id());
    
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()
                ->withErrors(['current_password' => 'Current password is incorrect'])
                ->withInput()
                ->with('showModal', 'changePasswordModal'); 
        }
    
        // Jika lolos semua, update password
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        return back()->with('success', 'Password updated successfully');
    }    
}
=======
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
>>>>>>> fitur-tertinggal
