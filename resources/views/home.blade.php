@extends('layouts.main')

@section('container')


<style>
/* tombol */
    .btn-1{
        background-color: #E55B19;
        color: #ffffff;
        border: 1px solid #E55B19;
        padding: 8px 20px;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 20px;
        box-sizing: border-box;
    }
    .btn-1:hover{
        background-color: #ffffff;
        color: #E55B19;
        box-shadow: 0 0 10px #e55a196c;
    }
    .rows{
        display: flex;
        align-content: center;
        align-items: center;
    }

/* HERO */
    .c-hero{
        display: flex;
        padding: 80px;
        height: 85vh;
        align-items: center;
        align-content: center;
        box-sizing: border-box;
    }

    .c-hero h1{
        font-weight: 700;
    }
    .c-hero p{
        margin: 30px 0px;
    }
    .l-50{
        width: 50%;
        margin: auto;
    }
    .b-hero-left{
        padding-right: 50px; 
    }
    .b-hero-right img{
        width: 600px;
        margin: auto;
    }
    @media (max-width: 768px) {
        .c-hero{
            flex-direction: column-reverse;
            padding: 30px;
            margin-bottom: 50px;
            align-content: center;
        }
        .b-hero-right img{
            width: 100%;
        }
        .l-50{
            width: 100%;
        }
    }

/* PELAYANAN KAMI*/
    .c-pelayanan{
        height: 85vh;
        justify-content: center;
        text-align: center; 
        padding: 20px;
    }
    .c-b-pelayanan{
        display: flex;
        padding: 30px;
        gap: 20px;
        justify-content: center;
    }
    .b-pelayanan{
        width: 100%;
        max-width: 280px;
        border: 1px solid #dbdbdb;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.171);
        border-radius: 10px;
    }
    .i-pelayanan{
        background-color: #E55B19;
        width: 65px;
        border-radius: 10px 0px 10px 0px;
        padding: 10px;
    }
    .b-pelayanan:nth-child(1) .i-pelayanan {
    background-color: #FF5733; 
    }

    .b-pelayanan:nth-child(2) .i-pelayanan {
        background-color: #3498db; 
    }

    .b-pelayanan:nth-child(3) .i-pelayanan {
        background-color: #f1c40f; 
    }

    .b-pelayanan:nth-child(4) .i-pelayanan {
        background-color: #9b59b6; 
    }
    .i-pelayanan i {
        color: #ffffff;
    }
    .desc-pelayanan{
        margin-top: 7px;
        padding: 15px;
        text-align: left;
    }
    .desc-pelayanan p{
        font-size: 14px;
    }
    @media (max-width : 780px) {
        .c-pelayanan{
            height: auto;
        }
        .c-b-pelayanan{
            flex-direction: column;
            padding: 0px;
        }
        .b-pelayanan{
            max-width: 100%;
        }
    }

/* Order */
    .c-order{
        background-color: #FCEDE6;
        width: 100%;
        display: flex;
        padding: 50px;
    }
    .b-order-left img{
        width: 80%;
        max-width: 400px;
        margin: auto;
    }
    .number-order{
        text-align: center;
        align-content: center;
        background-color: #E55B19;
        color: #ffffff;
        font-size: 1.2rem;
        margin: 10px;   
        border-radius: 50%;
        width: 40px;
        height: 40px;
        box-sizing: border-box;
    }
    .desc-order{
        align-content: center;
    }
    .desc-order p {
        font-size: 14px;
        margin: 0;
    }
    .desc-order h5{
        margin: 0;
        font-size: 15px;
        font-weight: 700;
    }
    .card-order{
        margin-bottom: 30px;
    }
    @media (max-width : 780px) {
        .c-order{
            height: auto;
            flex-direction: column;
            padding: 30px;      
        }
    }

/* Content */
    .c-content-1 {
        display: flex;
        padding: 60px;
        margin-top: 20px;
        font-size: 11pt;
    }

    .c-content-1 h3 {
        font-weight: 600;
    }
    .c-content-1 p {
        font-size: 11pt;
    }
    .boxx{
        width: 50%;
        padding: 20px;
        margin: auto;
    }

    .box-r-content {
        justify-content: center;
        text-align: center;
        align-content: center;
    }

    .box-r-content img {
        width: 300px;
        height: auto;
        margin: auto;       
    }


    .box-keunggulan{
        display: flex;
        flex-direction: row;
        justify-content: left;
        text-align: left;
        gap: 20px;
        margin: 10px;
    }
    .box-keunggulan ul , .box-keunggulan ul li {
        list-style-type: none;
        margin-top: 16px;
    }

    @media (max-width: 768px) {
        .c-content-1 {
            display: flex;
            padding: 20px;
            flex-direction: column-reverse;
        }
        .boxx{
            width: 100%;
        }
        .box-r-content img {
            width: 300px;
        }
        .box-keunggulan {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    }
    .box-keunggulan ul li i {
            color: #E55B19;
            margin-right: 10px; 
        }

</style>

<section class="c-hero">
    <div class="b-hero-left l-50">
        <h1>
            Saatnya untuk <br>
            <font class="color">Digitalisasi</font> UMKM <br>
            tumbuh diera digital
        </h1>
        <p>
            Transformasi digital kini menjadi kunci kesuksesan UMKM.
            Kami membantu Anda beradaptasi bisnis melalui website profesional 
            yang siap mendukung pertumbuhan di era digital.
        </p>
        <a href="#" class="btn-1">Get Started</a>
    </div>
    <div class="b-hero-right 50%">
        <img src="{{ asset('img/hero.png') }}" alt="">
    </div>
</section>

<section class="c-pelayanan">
    <div class="h-pelayanan">
        <h3>Pelayanan <font class="color">Terbaik </font>Kami</h3>
        <p>perluas jangkauan pasar, dan tingkatkan efisiensi bisnis anda melalui website</p>
    </div>
    <div class="c-b-pelayanan">

        <div class="b-pelayanan">
            <div class="i-pelayanan">
                <i class="fa fa-lock"></i>
            </div>
            <div class="desc-pelayanan">
                <h5>Optimasi SEO</h5>
                <p>
                    Tingkatkan peringkat website Anda di mesin pencari dengan teknik SEO yang efektif, agar lebih mudah ditemukan oleh calon pelanggan.
                </p>
            </div>
        </div>
        <div class="b-pelayanan">
            <div class="i-pelayanan">
                <i class="fa fa-lock"></i>
            </div>
            <div class="desc-pelayanan">
                <h5>Optimasi SEO</h5>
                <p>
                    Tingkatkan peringkat website Anda di mesin pencari dengan teknik SEO yang efektif, agar lebih mudah ditemukan oleh calon pelanggan.
                </p>
            </div>
        </div>
        <div class="b-pelayanan">
            <div class="i-pelayanan">
                <i class="fa fa-lock"></i>
            </div>
            <div class="desc-pelayanan">
                <h5>Optimasi SEO</h5>
                <p>
                    Tingkatkan peringkat website Anda di mesin pencari dengan teknik SEO yang efektif, agar lebih mudah ditemukan oleh calon pelanggan.
                </p>
            </div>
        </div>
        <div class="b-pelayanan">
            <div class="i-pelayanan">
                <i class="fa fa-lock"></i>
            </div>
            <div class="desc-pelayanan">
                <h5>Optimasi SEO</h5>
                <p>
                    Tingkatkan peringkat website Anda di mesin pencari dengan teknik SEO yang efektif, agar lebih mudah ditemukan oleh calon pelanggan.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="c-order">
    <div class="b-order-left l-50 text-center">
        <img src="{{ asset('img/browser.png') }}" alt="" style="margin: auto">
    </div>
    <div class="b-order-right l-50">
        <h2>Solusi <font class="color">Terbaik</font> </h2>
        <p>
            Setiap bisnis memiliki tantangan dan tujuan yang berbeda. bantu kami memahami kebutuhan Anda, agar solusi yang kami tawarkan tepat dan efektif.
        </p>
        <div class="card-order">
            <div class="rows mt-4">
                <div class="number-order">1</div>
                <div class="desc-order">
                    <h5>Hubungi Kami</h5>
                    <p>
                        Hubungi kami sekarang untuk info lebih lanjut
                    </p>
                </div>
            </div>
            <div class="rows mt-3">
                <div class="number-order">2</div>
                <div class="desc-order">
                    <h5>Konsultasi</h5>
                    <p>
                        Konsultasi gratis untuk kebutuhan bisnis Anda.
                    </p>
                </div>
            </div>
            <div class="rows mt-3">
                <div class="number-order">3</div>
                <div class="desc-order">
                    <h5>Order layanan</h5>
                    <p>
                        Siap untuk memulai? Pesan layanan kami sekarang!
                    </p>
                </div>
            </div>
            <div class="rows mt-3">
                <div class="number-order">4</div>
                <div class="desc-order">
                    <h5>Payment</h5>
                    <p>
                        Proses pembayaran mudah dan aman
                    </p>
                </div>
            </div>
        </div>
        <a href="#" class="btn-1">Hubungi Kami</a>
    </div>
</section>

<div class="c-content-1">
    <div class="box-l-content boxx">
        <h3>Jangkau Lebih <font class="color">Banyak Customer</font> </h3>
        <p>Keunggulan membuat website</p>
        <div class="box-keunggulan">
            <div class="keunggulan-kiri">
                <ul>
                    <li><i class="fas fa-check-circle"></i> Meningkatkan Kredibilitas</li>
                    <li><i class="fas fa-check-circle"></i> Mudah diakses 24/7</li>
                    <li><i class="fas fa-check-circle"></i> Memperluar jangkauan pasar</li>
                </ul>
            </div>
            <div class="keunggulan-kanan">
                <ul>
                    <li><i class="fas fa-check-circle"></i> Mempromosikan Portofolio</li>
                    <li><i class="fas fa-check-circle"></i> Tampil unik & beda</li>
                    <li><i class="fas fa-check-circle"></i> Efisiensi & Otomatisasi</li>
                </ul>
            </div>
        </div>
        <p>Buat website impianmu sekarang agar mudah diakses oleh siapapun</p>
        {{-- <a href="" class="btn-1">Hubungi Kami</a> --}}

    </div>
    <div class="box-r-content boxx">
        <img src="{{ asset('img/show.png') }}" alt="">
    </div>
</div>

@endsection