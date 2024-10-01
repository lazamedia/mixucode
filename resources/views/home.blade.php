@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset ('css/home.css') }}">

<style>
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
