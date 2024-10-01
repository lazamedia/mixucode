<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
            'csrf_token' => csrf_token() // Menyertakan token CSRF dalam view
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|min:3|max:50',
            'password' => 'required|string|min:8|max:50'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $seconds = RateLimiter::availableIn($this->throttleKey($request));
            Log::warning('Terlalu banyak percobaan login untuk username: ' . Str::lower($request->input('username')) . ' dari IP: ' . $request->ip());
            return back()->with('loginError', 'Terlalu banyak percobaan login. Coba lagi dalam ' . $seconds . ' detik.')
                         ->with('retryAfter', $seconds);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            RateLimiter::clear($this->throttleKey($request));
            return redirect()->intended('/dashboard');
        }

        Log::warning('Login gagal untuk username: ' . Str::lower($request->input('username')) . ' dari IP: ' . $request->ip());
        $this->incrementLoginAttempts($request);
        return back()->with('loginError', 'Login gagal. Silakan coba lagi.');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    protected function hasTooManyLoginAttempts(Request $request)
    {
        return RateLimiter::tooManyAttempts($this->throttleKey($request), 3);
    }

    protected function throttleKey(Request $request)
    {
        return Str::lower($request->input('username')) . '|' . $request->ip();
    }

    protected function incrementLoginAttempts(Request $request)
    {
        $attempts = RateLimiter::attempts($this->throttleKey($request));
        $penaltySeconds = min(600, 60 * pow(2, $attempts - 1)); // Batas maksimum penalti 10 menit
        RateLimiter::hit($this->throttleKey($request), now()->addSeconds($penaltySeconds));
    }
}
