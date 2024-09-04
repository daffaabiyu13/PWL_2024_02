<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserProfileController extends Controller
{
    // Method untuk menampilkan profil pengguna
    public function show($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Mengirim data pengguna ke view 'user.profile'
        return view('user.profile', compact('user'));
    }
}