@extends('layouts.main')

@section('container')

<!-- Google Fonts: Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-p6X5ZLhPL7DzEOiVgW/K2u3cJRKpK1gCMoXaIySbxrknfApsaI8K1vVf36r5xfsM1M2pHqfVqHfHZ+OX0qHvUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Email.js SDK -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("YOUR_USER_ID"); // Ganti dengan User ID Anda dari Email.js
   })();
</script>

<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    /* Header Kontak */
    .h-kontak {
        text-align: center;
        padding: 60px 20px 20px 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .h-kontak h1 { 
        font-size: 36px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .h-kontak p {
        font-size: 16px;
        color: #7f8c8d;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Container Kontak */
    .c-kontak {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
        padding: 40px 20px;
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Formulir Kontak */
    .form-kontak {
        flex: 1 1 500px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 30px 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .form-kontak:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .form-kontak h2 {
        font-size: 24px;
        color: #2980b9;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-kontak form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-kontak input,
    .form-kontak textarea {
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .form-kontak input:focus,
    .form-kontak textarea:focus {
        border-color: #2980b9;
        outline: none;
    }

    .form-kontak button {
        padding: 12px 20px;
        background-color: #2980b9;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-kontak button:hover {
        background-color: #1abc9c;
    }

    /* Informasi Kontak */
    .info-kontak {
        flex: 1 1 300px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 30px 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .info-kontak:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .info-kontak h2 {
        font-size: 24px;
        color: #2980b9;
        margin-bottom: 20px;
        text-align: center;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .info-item i {
        font-size: 20px;
        color: #2980b9;
        margin-right: 15px;
        min-width: 25px;
        text-align: center;
    }

    .info-item p {
        font-size: 16px;
        color: #2c3e50;
        margin: 0;
    }

    /* Peta Lokasi */
    .map-kontak {
        width: 100%;
        height: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .map-kontak iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Media Sosial */
    .sosial-kontak {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }

    .sosial-kontak a {
        color: #2980b9;
        font-size: 24px;
        transition: color 0.3s;
    }

    .sosial-kontak a:hover {
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
        .c-kontak {
            flex-direction: column;
            align-items: center;
        }

        .form-kontak,
        .info-kontak {
            width: 100%;
            max-width: 500px;
        }

        .map-kontak {
            height: 250px;
        }
    }

    @media only screen and (max-width: 480px) {
        .h-kontak h1 { 
            font-size: 28px;
        }

        .h-kontak p {
            font-size: 14px;
        }

        .form-kontak h2,
        .info-kontak h2 {
            font-size: 20px;
        }

        .form-kontak input,
        .form-kontak textarea {
            font-size: 14px;
        }

        .form-kontak button,
        .info-item p {
            font-size: 14px;
        }

        .info-item i {
            font-size: 18px;
        }

        .sosial-kontak a {
            font-size: 20px;
        }
    }
</style>

<!-- Header Kontak -->
<div class="h-kontak">
    <h1>Kontak Kami</h1>
    <p>Hubungi kami untuk informasi lebih lanjut atau untuk memulai proyek Anda bersama kami. Kami siap membantu Anda mencapai tujuan bisnis Anda melalui solusi web yang inovatif dan efektif.</p>
</div>

<!-- Container Kontak -->
<div class="c-kontak">
    <!-- Formulir Kontak -->
    <div class="form-kontak">
        <h2>Hubungi Kami</h2>
        <form id="contact-form">
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <input type="tel" name="phone" placeholder="Nomor Telepon" required>
            <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    <!-- Informasi Kontak -->
    <div class="info-kontak">
        <h2>Informasi Kami</h2>
        <div class="info-item">
            <i class="fa fa-map-marker-alt"></i>
            <p>Jl. Contoh No. 123, Jakarta, Indonesia</p>
        </div>
        <div class="info-item">
            <i class="fa fa-phone-alt"></i>
            <p>+62 812 3456 7890</p>
        </div>
        <div class="info-item">
            <i class="fa fa-envelope"></i>
            <p>info@websiteanda.com</p>
        </div>
        <div class="sosial-kontak">
            <a href="https://facebook.com/websiteanda" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/websiteanda" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/websiteanda" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com/company/websiteanda" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<!-- Peta Lokasi -->
<div class="map-kontak">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.102514839475!2d106.84559971475882!3d-6.208763495498779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3da0d5c9f7b%3A0x1e9a8c5c5c5c5c5c!2sJl.%20Contoh%20No.%20123%2C%20Jakarta%2C%20Indonesia!5e0!3m2!1sid!2sid!4v1688258424444!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<script>
    // Konfigurasi Email.js
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Menggunakan Email.js untuk mengirim formulir
            emailjs.sendForm('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', form)
                .then(function(response) {
                    alert('Pesan berhasil dikirim! Terima kasih.');
                    form.reset();
                }, function(error) {
                    alert('Gagal mengirim pesan. Silakan coba lagi.');
                    console.error('Email.js Error:', error);
                });
        });
    });
</script>

@endsection
