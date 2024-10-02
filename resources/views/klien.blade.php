@extends('layouts.main')

@section('container')

<!-- Google Fonts: Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    /* Header Klien */
    .h-klien {
        text-align: center;
        padding: 60px 20px 20px 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .h-klien h1 { 
        font-size: 36px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .h-klien p {
        font-size: 16px;
        color: #7f8c8d;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Container Klien */
    .c-klien {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        width: 100%;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Client Box */
    .client-box {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .client-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        background-color: #f0f8ff;
    }

    /* Client Domain */
    .client-domain {
        font-size: 16px;
        color: #2980b9;
        font-weight: 600;
        word-wrap: break-word;
    }

    .client-domain a {
        text-decoration: none;
        color: #2980b9;
        transition: color 0.3s ease;
    }

    .client-domain a:hover {
        color: #1abc9c;
    }

    /* Animasi Fade In Up */
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsif */
    @media only screen and (max-width: 768px) {
        .c-klien {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            padding: 30px 15px;
        }

        .client-box {
            padding: 20px 15px;
        }

        .client-domain {
            font-size: 14px;
        }
    }

    @media only screen and (max-width: 480px) {
        .c-klien {
            grid-template-columns: 1fr;
            padding: 20px 10px;
        }

        .client-box {
            padding: 15px 10px;
        }

        .client-domain {
            font-size: 14px;
        }
    }
</style>

<!-- Header Klien -->
<div class="h-klien">
    <h1>Klien Kami</h1>
    <p>Kami bangga telah bekerja sama dengan berbagai klien dari berbagai daerah, memberikan solusi web yang luar biasa untuk kebutuhan bisnis mereka.</p>
</div>

<!-- Container Klien -->
<div class="c-klien">
    <!-- Klien 1 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien1.com" target="_blank">klien1.com</a></div>
    </div>

    <!-- Klien 2 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien2.com" target="_blank">klien2.com</a></div>
    </div>

    <!-- Klien 3 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien3.com" target="_blank">klien3.com</a></div>
    </div>

    <!-- Klien 4 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien4.com" target="_blank">klien4.com</a></div>
    </div>

    <!-- Klien 5 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien5.com" target="_blank">klien5.com</a></div>
    </div>

    <!-- Klien 6 -->
    <div class="client-box">
        <div class="client-domain"><a href="https://klien6.com" target="_blank">klien6.com</a></div>
    </div>

    <!-- Tambahkan klien lainnya sesuai kebutuhan -->
</div>

<script>
    // Animasi saat scroll ke elemen
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        const boxes = document.querySelectorAll('.client-box');
        boxes.forEach(box => {
            observer.observe(box);
        });
    });
</script>

@endsection
