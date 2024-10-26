@extends('layouts.main')

@section('container')

<style>
    /* Header FAQ */
    .h-faq {
        text-align: center;
        margin: 40px 0;
    }

    .h-faq h1 { 
        font-size: 32px;
        font-weight: bold;
        color: #01658d;
        margin-bottom: 10px;
    }

    .h-faq p {
        font-size: 16px;
        color: #555;
    }

    /* Container FAQ */
    .c-faq {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 100%;
        padding: 20px;
        gap: 20px;
    }

    .box-faq {
        width: 48%;
    }

    /* Accordion Styles */
    .accordion {
        width: 100%;
        margin: 10px 0;
    }

    .accordion-item {
        background-color: #fdfdfd; /* Putih tulang */
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .accordion-item:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .accordion-item-header {
        padding: 15px;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }

    .accordion-item-header:hover {
        background-color: #e9ecef;
    }


    .accordion-item-body {
        max-height: 0;
        overflow: hidden;
        padding: 0 15px;
        font-size: 14px;
        line-height: 1.6;
        background-color: #fff;
        opacity: 0;
        transform: translateY(-10px);
        transition: max-height 0.5s ease, opacity 0.5s ease, transform 0.5s ease, padding 0.5s ease;
    }

    .accordion-item.active .accordion-item-body {
        max-height: 500px; /* Sesuaikan dengan konten */
        opacity: 1;
        transform: translateY(0);
        padding: 15px;
    }

    .accordion-item-header i {
        font-size: 18px;
        background-color: #002a5b;
        color: #fff;
        padding: 8px;
        border-radius: 50%;
        transition: transform 0.3s, background-color 0.3s;
    }

    .accordion-item.active i {
        background-color: #d9534f; /* Tombol berubah warna saat aktif */
        transform: rotate(45deg);
    }

    /* Form Pertanyaan */
    .faq-any {
        text-align: center;
    }

    .faq-any img {
        width: 300px;
        height: auto;
        margin-bottom: 10px;
    }

    .faq-any h5 {
        font-size: 20px;
        color: #01658d;
        margin-bottom: 5px;
    }

    .faq-any p {
        font-size: 14px;
        color: #555;
        margin-bottom: 35px;
    }

    .faq-any form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .faq-any form input {
        width: 80%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .faq-any form input:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    .faq-any form button {
        width: 100px;
        padding: 8px 0;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .faq-any form button:hover {
        background-color: #0056b3;
    }

    /* Testimonial Section */
    .testimonial {
        width: 100%;
        margin: 40px 0;
        text-align: center;
    }

    .testimonial h2 {
        font-size: 24px;
        color: #01658d;
        margin-bottom: 20px;
    }

    .testimonial-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .testimonial-item {
        background-color: #fdfdfd;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        flex: 1 1 300px;
        transition: box-shadow 0.3s ease;
    }

    .testimonial-item:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .testimonial-item p {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }

    .testimonial-item .author {
        font-weight: bold;
        color: #01658d;
    }

    /* Responsif */
    @media only screen and (max-width: 768px) {
        .box-faq {
            width: 100%;
        }
    }
</style>

<!-- Header FAQ -->
<div class="h-faq">
    <h1>Frequently Asked Questions</h1>
    <p>Seputar Layanan Pembuatan Website</p>
</div>

<!-- Container FAQ dan Form -->
<div class="c-faq">
    <!-- Box pertanyaan sebelah kiri -->
    <div class="faq-question box-faq">
        <div class="accordion" id="faq-accordion">
            <!-- Pertanyaan 1 -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span>Bagaimana proses pembuatan website yang Anda tawarkan?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <div class="accordion-item-body">
                    <p>Proses pembuatan website kami dimulai dengan konsultasi kebutuhan Anda, diikuti dengan perancangan desain, pengembangan dan pemrograman, pengujian, dan akhirnya peluncuran website. Kami juga menyediakan dukungan setelah peluncuran untuk memastikan website Anda berjalan dengan baik.</p>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span>Apakah website yang dibuat oleh Anda SEO-friendly?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <div class="accordion-item-body">
                    <p>Ya, kami memastikan setiap website yang kami buat SEO-friendly. Kami menerapkan praktik terbaik SEO, termasuk penggunaan meta tags, struktur URL yang ramah, kecepatan loading yang optimal, dan responsive design untuk meningkatkan visibilitas website Anda di mesin pencari.</p>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span>Apakah Anda menyediakan layanan pemeliharaan website setelah selesai dibuat?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <div class="accordion-item-body">
                    <p>Ya, kami menyediakan layanan pemeliharaan website yang meliputi pembaruan konten, perbaikan bug, peningkatan keamanan, dan optimisasi performa. Dengan layanan ini, website Anda akan selalu up-to-date dan berjalan dengan lancar.</p>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span>Apakah website yang dibuat dapat diintegrasikan dengan sistem pembayaran online?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <div class="accordion-item-body">
                    <p>Ya, kami dapat mengintegrasikan berbagai sistem pembayaran online seperti PayPal, Stripe, atau payment gateway lokal sesuai kebutuhan bisnis Anda. Ini memungkinkan transaksi online yang aman dan efisien melalui website Anda.</p>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span>Bagaimana cara mengelola konten website setelah selesai dibuat?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <div class="accordion-item-body">
                    <p>Kami menyediakan Content Management System (CMS) yang user-friendly, seperti WordPress atau custom CMS, yang memungkinkan Anda untuk mengelola konten website dengan mudah tanpa perlu pengetahuan teknis. Anda dapat menambah, mengedit, atau menghapus konten kapan saja melalui dashboard admin.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Form untuk pertanyaan lain sebelah kanan -->
    <div class="faq-any box-faq">
        <img src="{{ asset('img/faq.png') }}" alt="Pertanyaan Lainnya">
        <h5>Punya Pertanyaan Lain?</h5>
        <p>Silahkan tulis pertanyaan Anda di bawah ini</p>
        <form id="question-form">
            <input type="text" name="question" placeholder="Tulis pertanyaan Anda" required>
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>

<!-- Testimonial Section -->
<div class="testimonial">
    <h2>Apa Kata Mereka?</h2>
    <div class="testimonial-container">
        <div class="testimonial-item">
            <p>"Layanan pembuatan website yang cepat dan profesional. Sangat membantu bisnis saya berkembang online!"</p>
            <p class="author">- Budi Santoso</p>
        </div>
        <div class="testimonial-item">
            <p>"Tim yang responsif dan ramah. Website yang dibuat sesuai dengan keinginan saya."</p>
            <p class="author">- Siti Aminah</p>
        </div>
        <div class="testimonial-item">
            <p>"Desain yang menarik dan fungsional. Website saya sekarang lebih mudah diakses dan SEO-friendly."</p>
            <p class="author">- Andi Wijaya</p>
        </div>
        <div class="testimonial-item">
            <p>"Support yang luar biasa setelah website selesai dibuat. Semua masalah cepat ditangani."</p>
            <p class="author">- Maya Putri</p>
        </div>
    </div>
</div>

<!-- Pastikan Font Awesome Terintegrasi -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-p6X5ZLhPL7DzEOiVgW/K2u3cJRKpK1gCMoXaIySbxrknfApsaI8K1vVf36r5xfsM1M2pHqfVqHfHZ+OX0qHvUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    // Accordion functionality with smooth animation
    document.querySelectorAll('.accordion-item-header').forEach(item => {
        item.addEventListener('click', () => {
            const accordionItem = item.parentNode;
            const body = accordionItem.querySelector('.accordion-item-body');
            const icon = accordionItem.querySelector('i');

            if (accordionItem.classList.contains('active')) {
                // Tutup accordion jika sudah aktif
                accordionItem.classList.remove('active');
                body.style.maxHeight = null;
            } else {
                // Tutup semua accordion lainnya
                document.querySelectorAll('.accordion-item').forEach(acc => {
                    acc.classList.remove('active');
                    acc.querySelector('.accordion-item-body').style.maxHeight = null;
                    acc.querySelector('i').classList.replace('fa-minus', 'fa-plus');
                });
                // Buka accordion yang diklik
                accordionItem.classList.add('active');
                body.style.maxHeight = body.scrollHeight + 'px';
            }

            // Toggle antara plus dan minus icons
            if (accordionItem.classList.contains('active')) {
                icon.classList.replace('fa-plus', 'fa-minus');
            } else {
                icon.classList.replace('fa-minus', 'fa-plus');
            }
        });
    });

    // Form submission to WhatsApp
    document.getElementById('question-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const question = this.querySelector('input[name="question"]').value;
        const waUrl = `https://wa.me/6282134749670?text=${encodeURIComponent('Saya ingin bertanya: ' + question)}`;
        window.open(waUrl, '_blank');
    });
</script>

@endsection
