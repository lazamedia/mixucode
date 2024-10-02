@extends('layouts.main')

@section('container')

<style>
    body {
        background-color: #081b29;
    }
    .card-blank{
        width: 100%;
        height: 600px;
        padding: 50px;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
    .body-blank{
        text-align: center;
        margin: auto;
        color: #ffffff;
        width: auto;
        height: auto;
        font-family: 'poppins';
    }
    .body-blank p{
        margin-top: -3px;
        font-size: 11pt;
        color: #b4b1b1;
    }
    .body-blank img {
        width: 200px;
        height: auto;
        margin-bottom: 20px;
    }

    .mtn-icons {
        list-style-type: none;
        padding-left: 0;
        display: flex;
        gap: 25px;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .mtn-icons li {
        display: inline-block;
    }

    .mtn-icons li a {
    color: #27779c;
    font-size: 1.4rem;
    display: inline-block; /* Pastikan elemen dapat ditransformasi */
    transition: color 0.3s ease, transform 0.3s ease;
    }

    .mtn-icons li a:hover {
        color: #00db9a;
        transform: translateY(-5px); /* Menggerakkan elemen ke atas */
    }

</style>


<div class="card-blank">
    <div class="body-blank">
        <img src="img/maintenance.png" alt="">
        <h4>Halaman Ini Sedang Dalam Perbaikan</h4>
        <p>Kunjungi sosial media kami untuk update terbaru dari kami.</p>
        <ul class="mtn-icons">
            <li><a href="https://wa.me/6282134749670" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/pripnuippnu.pujut01/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="mailto:your-email@example.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
        </ul>
    </div>
</div>


@endsection