@extends('layouts.main')

@section('container')

<style>
    /* Reset dan dasar styling */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .projects-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 80px;
    }

    .project-box {
        position: relative;
        width: 300px;
        height: 150px;
        background-color: #ffffff;
        border: 1px solid #bdbdbd96;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0px 6px rgba(0, 0, 0, 0.322);
        transition: transform 0.3s ease;
    }

    .project-box:hover {
        transform: translateY(-10px);
    }

    .project-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .project-box:hover .overlay {
        opacity: 1;
    }

    .overlay a {
        padding: 7px 15px;
        font-size: 10pt ;
        font-weight: 400;
        background-color: #0a85b6;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .overlay a:hover {
        background-color: #01658d;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .project-box {
            width: 45%;
            margin-top: 10px;
        }
    }

    @media (max-width: 480px) {
        .project-box {
            width: 90%;
        }
    }

    /* Tambahan untuk judul halaman */
    .page-title {
        text-align: center;
        margin-bottom: 40px;
        margin-top: 40px;
        color: #333;
    }
    .page-title h1 {
        font-size: 27px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .page-title p {
        font-size: 16px;
        color: #555;
    }
    .label-box{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 20px;
        font-size: 9pt;
        text-align: center;
        align-items: center;
        background-color: #ffffffbb;
        border-top: 1px solid #01658d;
        backdrop-filter: blur(10px);
    }
    .label-box:hover{
        display: none;
    }
</style>

{{-- Halaman Menampilkan box web demo --}}
<div class="container">
    
    <div class="page-title">
        <h1 >My <font style="color: #0a85b6">Project</font></h1>
        <p>Silahkan lihat proyek web yang telah saya buat.</p>
    </div>

    <div class="projects-container">
        <!-- Contoh Project Box -->
        
        <div class="project-box">
            <div class="label-box">
                <p>Web Ecomerce</p>
            </div>
            <img src="{{ asset('img/demo-selora.png ') }}" alt="Project 1">
            <div class="overlay">
                <a href="https://selora.mixucode.my.id" target="_blank">View Demo</a>
            </div>

        </div>

        <div class="project-box">
            <div class="label-box">
                <p>Web Organisasi</p>
            </div>
            <img src="{{ asset('img/demo-advisor.png    ') }}" alt="Project 2">
            <div class="overlay">
                <a href="https://ipnu-ippnu.mixucode.my.id" target="_blank">View Demo</a>
            </div>
        </div>

        <div class="project-box">
            <div class="label-box">
                <p>Web Resto</p>
            </div>
            <img src="{{ asset('img/demo-flavor.png ') }}" alt="Project 3">
            <div class="overlay">
                <a href="https://lp01.mixucode.my.id" target="_blank">View Demo</a>
            </div>
        </div>

        <!-- Tambahkan lebih banyak project-box sesuai kebutuhan -->
    </div>

    <div class="page-title">
        <h1 ><font style="color: #0a85b6">Coming Soon </font> Project</h1>
        <p>Project yang akan datang.</p>
    </div>

    <div class="projects-container">
        <!-- Contoh Project Box -->
        
        <div class="project-box">
            <div class="label-box">
                <p>ProjectVault</p>
            </div>
            <img src="{{ asset('img/demo-saveproject.png ') }}" alt="Project 1">
            <div class="overlay">
                <a href="https://cyber.mixucode.my.id" target="_blank">View Demo</a>
            </div>

        </div>

        <!-- Tambahkan lebih banyak project-box sesuai kebutuhan -->
    </div>

</div>

@endsection
