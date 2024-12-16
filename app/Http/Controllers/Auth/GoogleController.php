<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; // Pastikan ini diimpor
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            // Ambil data pengguna dari Google
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Cek apakah pengguna sudah ada berdasarkan google_id
            $user = User::where('google_id', $googleUser->getId())->first();

            if ($user) {
                // Jika pengguna ditemukan, login
                Auth::login($user);
                return redirect()->intended('/'); // Ganti dengan rute yang sesuai
            } else {
                // Cek apakah email sudah ada
                $existingUser = User::where('email', $googleUser->getEmail())->first();
                if ($existingUser) {
                    // Jika email sudah ada, tambahkan google_id dan avatar, lalu login
                    $existingUser->update([
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(), // Menyimpan URL foto profil
                    ]);
                    Auth::login($existingUser);
                    return redirect()->intended('/'); // Ganti dengan rute yang sesuai
                } else {
                    // Jika pengguna dan email belum ada, buat akun baru
                    $newUser = User::create([
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(), // Menyimpan URL foto profil
                        'password' => Hash::make(uniqid()), // Atur password acak
                    ]);

                    Auth::login($newUser);
                    return redirect()->intended('/'); // Ganti dengan rute yang sesuai
                }
            }
        } catch (\Exception $e) {
            return redirect('/login')->with('loginError', 'Autentikasi dengan Google gagal.');
        }
    }
}
