@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/profile.css">

<section class="info">
    <p>
        <span class="content-original">Hallo sobat kami.. Materi pembelajaran kita selalu update seminggu sekali</span>
    </p>
</section>
<section class="content">

    <div class="box left-box">
        <div>
            <div class="profile">
                <img src="img/logo.jpg" alt="Profile Picture">
                <p>Lazuardi Mandegar</p>
            </div>
            <ul class="nav flex-column" id="menuList">
                <li class="nav-item">
                    <p>Akun saya</p>
                    <p>Aktif 120 hari lagi</p>
                </li>
                <li class="nav-item">
                    <p>Member</p>
                    <p>Silver</p>
                </li>
                <li class="nav-item">
                    <p>Kelas Yang Diambil</p>
                    <p>Laravel</p>
                </li>
            </ul>
        </div>
        <div class="sosmed">
            <a href="#">
                <span class="icon"><i class="fas fa-users"></i></span>
                komunitas
            </a>
            <div class="divider"></div>
            <a href="#">
                <span class="icon"><i class="fab fa-whatsapp"></i></span>
                bantuan
            </a>
        </div>
        <div class="single">
            <a href="#">
                <span class="icon"><i class="fas fa-clock"></i></span>
                Perpanjang Masa Aktif
            </a>
        </div>
        <div class="single2">
            <a href="#">
                <span class="icon"><i class="fas fa-clipboard-check"></i></span>
                Survey Pengguna
            </a>
        </div>
    </div>

    <div class="box right-box">
        <div class="judul">
            <H5>Akun Profil</H5>
        </div>
        <div class="isinya">
            {{-- <button class="edit-btn">
                <i class="fas fa-edit"></i>
            </button> --}}
            <div class="foto">
                <img src="img/logo.jpg" alt="">
            </div>
            <div class="bio">
                <h5>Nama Lengkap</h5>
                <p>Lazuardi Mandegar</p>
                <h5>Nomor WhatsApp</h5>
                <p>0821 0000 1111</p>
                <h5>Alamat Kota</h5>
                <p>Semarang</p>
                <h5>Info Akun</h5>
                <p>Aktif</p>
            </div>
        </div>
        <div class="action">

            <a href="#">
                Edit
            </a>
            <a href="#">
                Keamanan
            </a>
            <a href="#">
                Info
            </a>
        </div>
    </div>

</section>

@endsection
