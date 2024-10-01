@extends('layouts.main')

@section('container')

<style>
/* Body */
    body {
        font-family: 'poppins';
    }
    h3{
        color: #2c7592;
        margin-bottom: -3px;
    }
    p{
        font-size: 11pt;
    }
    .row{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
/* End */

/* Main Box */
    .main-box {
        width: 100%;
        height: 70vh;
        align-content: center;
        text-align: center;
    }
    .main-box h1 {
        font-weight: 800;
    }
    .box-tombol {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 20px;
    }

    .tombol-1 {
        background-color: #2c7592;
        color: #ffffff;
        padding: 7px 17px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .tombol-1:hover {
        transform: translateX(-5px);
    }

    .tombol-2 {
        color: #2c7592;
        border: 1px solid #2c7592;
        padding: 7px 17px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .tombol-2:hover {
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .main-box {
            height: 400px;
        }
        .box-framwork{
            
        }
    }

/* End */

/* Box Framwork */

    .box-framwork {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-top: 20px;
        border-top: 2px solid #2c7592;
        border-bottom: 2px solid #2c7592;
        position: relative;
        height: 50px;
        overflow: hidden;
        gap: 10%;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .box-framwork img {
        position: absolute;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        height: 30px;
    }

    /* Pada mode laptop, gambar-gambar ditampilkan berjejer */
    @media (min-width: 769px) {
        .box-framwork {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: auto;
        }

        .box-framwork img {
            position: static;
            opacity: 1;
        }
    }
/* End */

/* Box Konten 1 */
    .c-content-1 {
        display: flex;
        padding: 20px;
        margin-top: 20px;
        font-size: 11pt;
    }

    .c-content-1 h3 {
        font-weight: 600;
        color: #2c7592
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
        width: 500px;
        height: auto;
        margin: auto;       
    }

    .box-l-content {
        
    }
    .box-keunggulan{
        display: flex;
        flex-direction: row;
        justify-content: left;
        text-align: left;
        gap: 20px;
    }
    .box-keunggulan ul, li {
        list-style-type: none;
        margin-top: 6px;
    }

    @media (max-width: 768px) {
        .c-content-1 {
            display: flex;
            flex-direction: column;
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
            color: #2c7592; /* Warna hijau untuk icon */
            margin-right: 10px; /* Jarak antara icon dan teks */
        }

/* End */

/* Box Konten 2 */
        .c-content-2{
            width: 100%;
            text-align: center;
            padding: 10px 50px;
            margin-top: 40px;
        }
        .c-layanan{
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: auto;
            align-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .box-layanan{
            background-color: #ffffff;
            width: 20%;
            margin: auto;
            border: 1px solid #c9c9c9;
            min-height: 150px;
            padding: 10px 20px;
            align-items: center;
            align-content: center;
            text-align: center;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out; 
            cursor: pointer;
        }
        .box-layanan:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); 
            border: #2c7592;    
        }
        .box-layanan h5{
            font-weight: 600;
            color: #2c7592;
        }
        @media (max-width: 768px) {
            .c-content-2{
                width: 100%;
                text-align: center;
                padding: 10px 20px;
                margin-top: 40px;
            }
            .box-layanan{
                width: 80%;
            }
            .c-layanan{
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
        }
/* End */

/* Box Kontent 3 */

    .c-content-3 {
        width: 100%;
        text-align: center;
        padding: 30px;
        margin-top: 40px;
        background-color: #2c7592;
        color: #ffffff;
        padding: 30px;
    }

    .c-pesanan {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 20px; 
        padding: 10px; 
    }

    .box-pesanan {
        width: 19%; 
        border: 1px solid #ffffff;
        border-radius: 10px 0px 10px 0px;
        transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
    }

    .box-pesanan:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border: none;
    }

    .box-pesanan img {
        width: 100px;
        margin: 20px;
    }

    @media (max-width: 768px) {
        .c-content-3 {
            padding: 40px;
        }
        .c-pesanan {
            justify-content: flex-start;
            gap: 0; 
            padding: 10px 0; 
            overflow-x: auto; 
            scroll-snap-type: x mandatory; 
            -webkit-overflow-scrolling: touch; 
            white-space: nowrap;
        }

        .box-pesanan {
            width: 100%; 
            min-width: 100%;
            scroll-snap-align: start; 
        }
    }



/* End */

/* Box Harga */
    .judul-harga{
        justify-content: center;
        text-align: center;
        margin-top: 40px;
    }

    .harga {
        width: 100%;
        padding: 20px;
        border-bottom: 2px solid #9d52db00;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start; /* Pastikan setiap box menempel ke atas */
    }

    .box-harga {
        width: 250px;
        margin: 20px;
        padding: 0;
        border-radius: 7px;
        background-color: #ffff;
        box-shadow: 0 0 2em rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .box-harga:hover {
        transform: translateY(-10px);
        box-shadow: 0 0 2em rgba(0, 0, 0, 0.2);
    }

    .box-harga-judul {
        background: linear-gradient(135deg, #9d52db, #f370bf);
        color: #ffffff;
        height: 80px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        width: 100%;
        clip-path: polygon(
            0 0,
            100% 0%,
            100% 80%,
            50% 100%,
            0 80%
        );
    }

    .box-harga-judul h2 {
        font-size: 17pt;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: -3px;
        color: #ffffff;
        margin-top: 3px;
    }

    .box-harga-judul p {
        font-size: 9pt;
        margin: 0;
    }

    .price {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .price h3 {
        font-size: 18pt;
        margin-right: 5px;
    }

    .price p {
        font-size: 9pt;
    }

    .box-harga-isi {
        padding: 10px;
    }

    .box-harga-isi ul {
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .box-harga-isi li {
        padding: 1em 0;
        color: #999;
        font-size: 0.8em;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box-harga-isi li:nth-child(odd) {
        background: #f9f9f9;
    }

    .box-harga-isi li i {
        margin-right: 0.3em;
    }

    .box-harga-isi li .fa-check {
        color: #00ff44;
    }

    .box-harga-viewlist p {
        margin-top: 9px;
    }

    .harga a {
        background: linear-gradient(135deg, #9d52db, #f370bf);
        justify-content: center;
        text-align: center;
        color: #f9f9f9;
        height: 30px;
        display: flex;
        align-items: center;
        margin-bottom: 0px;
        text-decoration: none;
        margin-top: auto; /* Letak tombol Order Now ke bawah */
    }

    .harga a:hover {
        background: linear-gradient(135deg, #8900fa, #ff0099);
        color: #fff;
    }

/* End */

</style>


{{-- Main Content --}}

    <div class="main-box">
        <h1>Turn Ideas <br>
            <font style="color: #2c7592">Into Unlimited Code</font></h1>
            <p>Jasa pembuatan website profesional yang responsif, modern, dan sesuai kebutuhan bisnis Anda</p>
            <div class="box-tombol">
                <a href="#" class="tombol-1">Get Started</a>
                <a href="#" class="tombol-2">Learn More</a>
            </div>

    </div>

{{-- End --}}

{{-- Box Framwork --}}

    <div class="box-framwork">
        <img src="{{ asset('img/laravel.png') }}" alt="Laravel">
        <img src="{{ asset('img/wordpress.png') }}" alt="WordPress">
        <img src="{{ asset('img/filament.png') }}" alt="Filament">
        <img src="{{ asset('img/figma.png') }}" alt="Figma">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.box-framwork img');
            let currentIndex = 0;
            const totalImages = images.length;
            let intervalId;
            
            // Fungsi untuk menyembunyikan semua gambar kecuali yang sedang tampil
            function hideAllImagesExceptCurrent() {
                images.forEach((img, index) => {
                    img.style.opacity = index === currentIndex ? 1 : 0; // Tampilkan gambar currentIndex, sembunyikan yang lain
                });
            }

            // Fungsi untuk memulai pergantian gambar di mode responsif
            function startImageRotation() {
                // Hentikan animasi yang sedang berjalan sebelum memulai yang baru
                if (intervalId) clearInterval(intervalId);
                
                function showNextImage() {
                    images[currentIndex].style.opacity = 0; // Sembunyikan gambar saat ini
                    
                    // Perbarui index gambar berikutnya
                    currentIndex = (currentIndex + 1) % totalImages;
                    
                    // Tampilkan gambar berikutnya setelah fade out selesai
                    setTimeout(() => {
                        images[currentIndex].style.opacity = 1;
                    }, 1000); // Sesuaikan dengan durasi 'transition' CSS
                }
                
                hideAllImagesExceptCurrent(); // Pastikan hanya satu gambar yang tampil
                intervalId = setInterval(showNextImage, 3000); // Ganti gambar setiap 3 detik
            }
            
            // Fungsi untuk menghentikan rotasi gambar
            function stopImageRotation() {
                if (intervalId) clearInterval(intervalId); // Hentikan interval rotasi
                images.forEach(img => img.style.opacity = 1); // Tampilkan semua gambar
            }
            
            // Fungsi untuk mengelola mode rotasi gambar sesuai ukuran layar
            function handleResize() {
                const screenWidth = window.innerWidth;
                
                if (screenWidth <= 768) {
                    // Jika layar dalam mode responsif, mulai animasi
                    currentIndex = 0; // Reset index gambar
                    hideAllImagesExceptCurrent(); // Sembunyikan semua gambar kecuali yang pertama
                    startImageRotation();
                } else {
                    // Jika layar dalam mode non-responsif, hentikan animasi
                    stopImageRotation();
                }
            }
            
            // Jalankan pengecekan ukuran layar pada saat halaman dimuat
            handleResize();
            
            // Jalankan pengecekan ukuran layar jika ada resize
            window.addEventListener('resize', handleResize);
        });
    </script>


{{-- End --}}

{{-- Box Konten 1 --}}

    <div class="c-content-1">
        <div class="box-r-content boxx">
            <img src="{{ asset('img/marketing.png') }}" alt="">
        </div>
        <div class="box-l-content boxx">
            <h3>JANGKAU LEBIH BANYAK CUSTOMER</h3>
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
            <p>Ingin mulai project sekarang? Hubungi kami untuk konsultasi gratis</p>
            <a href="" class="tombol-2">Hubungi Kami</a>
        </div>
    </div>

{{-- End --}}

{{-- Box konten 2 --}}

    <div class="c-content-2">
        <h3>Layanan Kami</h3>
        <p>Silahkan chat admin untuk kustom website.</p>
        <div class="c-layanan">

            <div class="box-layanan">
                <h5>Portofolio</h5>
                <p>Menampilkan karya dan proyek, dilengkapi galeri, testimoni klien, dan informasi kontak.</p>
            </div>
            <div class="box-layanan">
                <h5>UMKM Store</h5>
                <p>Katalog produk, sistem pemesanan online, untuk meningkatkan penjualan.</p>
            </div>
            <div class="box-layanan">
                <h5>Company Profile</h5>
                <p> Informasi tentang sejarah, visi, misi, layanan, dan tim perusahaan.</p>
            </div>
            <div class="box-layanan">
                <h5>Manajemen Data</h5>
                <p>Sistem untuk pengolahan data, analisis, dan pembuatan laporan perusahaan.</p>
            </div>

        </div>
    </div>

{{-- End --}}

{{-- Box konten 3 --}}

    <div class="c-content-3">
        <h4>Cara Melakukan Pemesanan</h3>
        <p>Silahkan chat admin untuk kustom website.</p>
        
        <div class="c-pesanan">

            <div class="box-pesanan">
                <img src="{{ asset('img/404.png') }}" alt="">
                <h5>Pesanan 1 </h5>
                <p>Pesanan dibuat secara online.</p>
            </div>
            <div class="box-pesanan">
                <img src="{{ asset('img/404.png') }}" alt="">
                <h5>Pesanan 2 </h5>
                <p>Pesanan dibuat secara online.</p>
            </div>
            <div class="box-pesanan">
                <img src="{{ asset('img/404.png') }}" alt="">
                <h5>Pesanan 3 </h5>
                <p>Pesanan dibuat secara online.</p>
            </div>
            <div class="box-pesanan">
                <img src="{{ asset('img/404.png') }}" alt="">
                <h5>Pesanan 4 </h5>
                <p>Pesanan dibuat secara online.</p>
            </div>
            <div class="box-pesanan">
                <img src="{{ asset('img/404.png') }}" alt="">
                <h5>Pesanan 5 </h5>
                <p>Pesanan dibuat secara online.</p>
            </div>

        </div>
    </div>

    <script>
        let container = document.querySelector('.c-pesanan');
        let boxes = document.querySelectorAll('.box-pesanan');
        let index = 0;
        let autoScroll;
    
        function scrollToBox(index) {
            // Scroll ke posisi box berdasarkan index
            container.scrollTo({
                left: boxes[index].offsetLeft,
                behavior: 'smooth'
            });
        }
    
        function startAutoScroll() {
            autoScroll = setInterval(() => {
                index = (index + 1) % boxes.length; // Loop kembali ke awal setelah box terakhir
                scrollToBox(index);
            }, 2000);
        }
    
        function stopAutoScroll() {
            clearInterval(autoScroll);
        }
    
        // Fungsi untuk mengecek ukuran layar
        function checkScreenSize() {
            if (window.innerWidth <= 768) {
                startAutoScroll(); // Aktifkan auto-scroll hanya di layar kecil
            } else {
                stopAutoScroll(); // Matikan auto-scroll di layar besar
            }
        }
    
        // Jalankan auto-scroll jika layar di bawah 768px
        checkScreenSize();
    
        // Perbarui saat layar diubah ukurannya
        window.addEventListener('resize', checkScreenSize);
    
        // Hentikan auto-scroll saat user scroll manual, dan restart setelah 5 detik
        let restartAutoScroll;
        container.addEventListener('scroll', () => {
            stopAutoScroll();
            clearTimeout(restartAutoScroll);
            restartAutoScroll = setTimeout(() => {
                if (window.innerWidth <= 768) {
                    startAutoScroll();
                }
            }, 2000); // Restart auto-scroll setelah 5 detik
        });
    </script>
    

{{-- End --}}

{{-- HARGA PRICE --}}
    <div class="judul-harga">
        <H3>List Harga</H3>
        <P>Harga bisa berbeda tergantung kebutuhan website</P>
    </div> 
    <section class="harga">
            
            <div class="box-harga">
                <div class="box-harga-judul">
                    <h2>Paket Pelajar</h2>
                    <p>Rekomendasi untuk pemula</p>
                </div>
                <div class="price">
                    <h3>Rp. 120.000</h3>
                    <p>/ Tahun</p>
                </div>
                <div class="box-harga-isi">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Wordpress Hosting</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Elementor Pro</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Includ Free 5 Page</span>
                        </li> 
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Unlimited Bandwith</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>1GB Storage</span>
                        </li>
                        <li>
                            <i class="fas fa-times"></i>
                            <span>Anti Email spam.</span>
                        </li>
                    </ul>
                </div>
                <a href="/checkout">Order Now</a>
            </div>

            <div class="box-harga">
                <div class="box-harga-judul">
                    <h2>Paket UMKM</h2>
                    <p>Pilihan terbaik untuk usaha UMKM</p>
                </div>
                <div class="price">
                    <h3>Rp. 250.000</h3>
                    <p>/ Tahun</p>
                </div>
                <div class="box-harga-isi">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-times"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-times"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-times"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                    </ul>
                </div>
                <a href="/checkout">Order Now</a>
            </div>

            <div class="box-harga">
                <div class="box-harga-judul">
                    <h2>Paket Profesional</h2>
                    <p>Solusi untuk profesional</p>
                </div>
                <div class="price">
                    <h3>Rp. 500.000</h3>
                    <p>/ Tahun</p>
                </div>
                <div class="box-harga-isi">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                    </ul>
                </div>
                <a href="/checkout">Order Now</a>
            </div>
    </section>
    <div class="nb">
        
    </div>
{{-- End --}}



@endsection
