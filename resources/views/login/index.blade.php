@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
 <!-- Notifikasi error jika ada -->
 @if(session()->has('loginError'))
 <div class="alert alert-danger alert-dismissible fade show small-text text-align-center " role="alert">
     {{ session('loginError') }}
 </div>
 @endif
 
<div class="login-box">
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="user-box">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" maxlength="50" autofocus required value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label>Username</label>
        </div>

        <div class="user-box">
            <input type="password" name="password" class="form-control" id="password" maxlength="50" required>
            <label>Password</label>

            <!-- Forgot Password di sebelah kanan -->
            {{-- <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a> --}}
        </div>

        <button id="login-btn" class="btn" type="submit" {{ session()->has('retryAfter') ? 'disabled' : '' }}>Login</button>
    </form>
</div>

<!-- Box untuk countdown waktu login, diletakkan di bawah box login -->
@if(session()->has('retryAfter'))
<div class="countdown-box" id="countdown-box">
    Coba lagi dalam {{ session('retryAfter') }} detik
</div>
@endif

<!-- Script untuk menghilangkan notifikasi error dalam 3 detik -->
<script>
    setTimeout(function() {
        let alertBox = document.querySelector('.alert');
        if (alertBox) {
            alertBox.classList.add('fade');
            setTimeout(function() {
                alertBox.remove();
            }, 500); // Waktu untuk transisi
        }
    }, 2000); // Hapus setelah 3 detik
</script>

<!-- Script untuk menghitung mundur waktu login -->
@if(session()->has('retryAfter'))
<script>
    let retryAfter = {{ session('retryAfter') }}; // waktu tunggu dalam detik
    let countdownBox = document.getElementById('countdown-box');
    let loginButton = document.getElementById('login-btn');

    // Hitung mundur hingga tombol kembali aktif
    let interval = setInterval(() => {
        retryAfter--;

        // Jika waktu habis, aktifkan kembali tombol login
        if (retryAfter <= 0) {
            clearInterval(interval);
            countdownBox.innerText = ""; // Hapus teks countdown
            countdownBox.style.display = 'none'; // Sembunyikan box countdown
            loginButton.removeAttribute('disabled'); // Hapus atribut disabled pada tombol
        } else {
            countdownBox.innerText = "Coba lagi dalam " + retryAfter + " detik";
        }
    }, 1000); // Hitung mundur setiap detik
</script>
@endif

@endsection
