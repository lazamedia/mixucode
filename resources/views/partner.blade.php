@extends('layouts.main')

@section('container')

<!-- Google Fonts: Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    /* Header Partner */
    .h-partner {
        text-align: center;
        padding: 60px 20px 20px 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .h-partner h1 { 
        font-size: 36px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .h-partner p {
        font-size: 16px;
        color: #7f8c8d;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Container Partner */
    .c-partner {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;
        padding: 40px 20px;
        gap: 20px;
    }

    /* Partner Box */
    .partner-box {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 30px 20px;
        text-align: center;
        width: 150px;
        height: 200px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .partner-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        background-color: #f0f8ff;
    }

    /* Partner Logo */
    .partner-logo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 15px auto;
        background-color: #f9f9f9;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .partner-logo img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .partner-box:hover .partner-logo img {
        transform: scale(1.1);
    }

    /* Partner Name */
    .partner-name {
        font-size: 16px;
        color: #2c3e50;
        font-weight: 600;
    }

    /* Call to Action Section */
    .cta-partner {
        text-align: center;
        background-color: #ffffff;
        border: 2px dashed #2980b9;
        border-radius: 10px;
        padding: 40px 20px;
        margin: 40px 20px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .cta-partner:hover {
        background-color: #ffffff;
        border-color: #1abc9c;
    }

    .cta-partner h3 {
        font-size: 24px;
        color: #2980b9;
        margin-bottom: 20px;
    }

    .cta-partner p {
        font-size: 16px;
        color: #7f8c8d;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-partner .btn-partner {
        background-color: #2980b9;
        color: #fff;
        padding: 12px 25px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .cta-partner .btn-partner:hover {
        background-color: #1abc9c;
    }

    /* Benefits Section */
    .benefits {
        width: 100%;
        margin: 40px 0;
        text-align: center;
        padding: 0 20px;
    }

    .benefits h2 {
        font-size: 24px;
        color: #2980b9;
        margin-bottom: 20px;
    }

    .benefits-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .benefit-item {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        max-width: 300px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .benefit-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .benefit-item i {
        font-size: 40px;
        color: #2980b9;
        margin-bottom: 15px;
    }

    .benefit-item h4 {
        font-size: 18px;
        color: #2980b9;
        margin-bottom: 10px;
    }

    .benefit-item p {
        font-size: 14px;
        color: #7f8c8d;
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
        .c-partner {
            justify-content: center;
        }

        .partner-box {
            width: 45%;
        }

        .benefits-container {
            flex-direction: column;
            align-items: center;
        }

        .benefit-item {
            max-width: 100%;
        }
    }

    @media only screen and (max-width: 480px) {
        .partner-box {
            width: 100%;
        }
    }

    .no-partner {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
        align-content: center;
        align-items: center;
        min-height: 200px;
        color: #999999;
    }
</style>

<!-- Header Partner -->
<div class="h-partner">
    <h1>Our Partners</h1>
    <p>Bekerja sama dengan yang terbaik untuk memberikan solusi web yang luar biasa bagi bisnis Anda.</p>
</div>

<!-- Container Partner -->
<div class="c-partner">
    {{-- partner --}}
     <!-- Partner 1 -->
        {{-- <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+1" alt="Partner 1">
            </div>
            <div class="partner-name">Partner 1</div>
        </div>

        <!-- Partner 2 -->
        <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+2" alt="Partner 2">
            </div>
            <div class="partner-name">Partner 2</div>
        </div>

        <!-- Partner 3 -->
        <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+3" alt="Partner 3">
            </div>
            <div class="partner-name">Partner 3</div>
        </div>

        <!-- Partner 4 -->
        <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+4" alt="Partner 4">
            </div>
            <div class="partner-name">Partner 4</div>
        </div>

        <!-- Partner 5 -->
        <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+5" alt="Partner 5">
            </div>
            <div class="partner-name">Partner 5</div>
        </div>

        <!-- Partner 6 -->
        <div class="partner-box">
            <div class="partner-logo">
                <img src="https://via.placeholder.com/80?text=Partner+6" alt="Partner 6">
            </div>
            <div class="partner-name">Partner 6</div>
        </div> --}}

    {{-- end --}}
        <div class="no-partner">
            <h5>Saat ini belum ada partner</h5>
        </div>
    <!-- Tambahkan partner lainnya sesuai kebutuhan -->
</div>

<!-- Call to Action: Ayo Bergabung Bersama Kami -->
<div class="cta-partner">
    <h3>Ayo Bergabung Bersama Kami!</h3>
    <p>Bergabunglah dengan jaringan partner kami dan manfaatkan keahlian kami untuk mengembangkan bisnis Anda. Kami menawarkan berbagai keuntungan termasuk sumber daya eksklusif, dukungan khusus, dan peluang kolaborasi untuk memastikan kesuksesan bersama.</p>
    <button class="btn-partner" onclick="window.location.href='https://wa.me/6282134749670?text=Saya%20ingin%20menjadi%20partner%20bisnis%20dengan%20Anda.'">Gabung Sekarang</button>
</div>

<!-- Benefits Section -->
<div class="benefits">
    <h2>Mengapa Bergabung dengan Kami?</h2>
    <div class="benefits-container">
        <div class="benefit-item">
            <i class="fa fa-handshake"></i>
            <h4>Pertumbuhan Bersama</h4>
            <p>Berkolaborasi dengan kami untuk memperluas jangkauan bisnis Anda dan mencapai pertumbuhan bersama melalui sumber daya dan keahlian yang dibagi.</p>
        </div>
        <div class="benefit-item">
            <i class="fa fa-rocket"></i>
            <h4>Solusi Inovatif</h4>
            <p>Akses teknologi terkini dan solusi inovatif untuk meningkatkan layanan Anda dan tetap unggul di pasar.</p>
        </div>
        <div class="benefit-item">
            <i class="fa fa-shield-alt"></i>
            <h4>Keamanan Terjamin</h4>
            <p>Nikmati kemitraan yang aman dan andal dengan komunikasi transparan dan dukungan khusus untuk memastikan kolaborasi yang sukses.</p>
        </div>
        <div class="benefit-item">
            <i class="fa fa-chart-line"></i>
            <h4>Wawasan Kinerja</h4>
            <p>Dapatkan wawasan kinerja yang berharga dan analitik untuk mengoptimalkan strategi Anda dan memaksimalkan hasil bisnis.</p>
        </div>
    </div>
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

        const boxes = document.querySelectorAll('.partner-box, .benefit-item');
        boxes.forEach(box => {
            observer.observe(box);
        });
    });
</script>

@endsection
