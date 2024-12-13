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
    }
    .btn-1:hover{
        background-color: #ffffff;
        color: #E55B19;
        box-shadow: 0 0 10px #e55a196c;
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
            margin-top: 80px;
            margin-bottom: 50px;
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

        </div>
    </div>
</section>
@endsection