@extends('layouts.main')

@section('container')



<style>
</style>


{{-- Main Content --}}


<style>
.glitch-wrapper {
   width: 100%;
   height: 100%;
   display: flex;
   align-items: center;
   justify-content: center;
   text-align: center;
   background-color: #222;
}

.glitch {
   position: relative;
   font-size: 80px;
   font-weight: 700;
   line-height: 1.2;
   color: #2c7592;
   letter-spacing: 5px;
   animation: shift 4s ease-in-out infinite alternate;
   z-index: 1;
}

.glitch:before {
   content: attr(data-glitch);
   position: absolute;
   top: 0;
   left: -2px;
   text-shadow: -1px 0 #00ffff;
   width: 100%;
   color: #2c7592;
   overflow: hidden;
   clip: rect(0, 900px, 0, 0);
   animation: noise-before 3s infinite linear alternate-reverse;
}

.glitch:after {
   content: attr(data-glitch);
   position: absolute;
   top: 0;
   left: 2px;
   text-shadow: 1px 0 #ff00ff;
   width: 100%;
   color: #2c7592;
   overflow: hidden;
   clip: rect(0, 900px, 0, 0);
   animation: noise-after 2s infinite linear alternate-reverse;
}

@keyframes noise-before {
   0% {
      clip: rect(61px, 9999px, 52px, 0);
   }

   5% {
      clip: rect(33px, 9999px, 144px, 0);
   }

   10% {
      clip: rect(121px, 9999px, 115px, 0);
   }

   15% {
      clip: rect(144px, 9999px, 162px, 0);
   }

   20% {
      clip: rect(62px, 9999px, 180px, 0);
   }

   25% {
      clip: rect(34px, 9999px, 42px, 0);
   }

   30% {
      clip: rect(147px, 9999px, 179px, 0);
   }

   35% {
      clip: rect(99px, 9999px, 63px, 0);
   }

   40% {
      clip: rect(188px, 9999px, 122px, 0);
   }

   45% {
      clip: rect(154px, 9999px, 14px, 0);
   }

   50% {
      clip: rect(63px, 9999px, 37px, 0);
   }

   55% {
      clip: rect(161px, 9999px, 147px, 0);
   }

   60% {
      clip: rect(109px, 9999px, 175px, 0);
   }

   65% {
      clip: rect(157px, 9999px, 88px, 0);
   }

   70% {
      clip: rect(173px, 9999px, 131px, 0);
   }

   75% {
      clip: rect(62px, 9999px, 70px, 0);
   }

   80% {
      clip: rect(24px, 9999px, 153px, 0);
   }

   85% {
      clip: rect(138px, 9999px, 40px, 0);
   }

   90% {
      clip: rect(79px, 9999px, 136px, 0);
   }

   95% {
      clip: rect(25px, 9999px, 34px, 0);
   }

   100% {
      clip: rect(173px, 9999px, 166px, 0);
   }
}

@keyframes noise-after {
   0% {
      clip: rect(26px, 9999px, 33px, 0);
   }

   5% {
      clip: rect(140px, 9999px, 198px, 0);
   }

   10% {
      clip: rect(184px, 9999px, 89px, 0);
   }

   15% {
      clip: rect(121px, 9999px, 6px, 0);
   }

   20% {
      clip: rect(181px, 9999px, 99px, 0);
   }

   25% {
      clip: rect(154px, 9999px, 133px, 0);
   }

   30% {
      clip: rect(134px, 9999px, 169px, 0);
   }

   35% {
      clip: rect(26px, 9999px, 187px, 0);
   }

   40% {
      clip: rect(147px, 9999px, 137px, 0);
   }

   45% {
      clip: rect(31px, 9999px, 52px, 0);
   }

   50% {
      clip: rect(191px, 9999px, 109px, 0);
   }

   55% {
      clip: rect(74px, 9999px, 54px, 0);
   }

   60% {
      clip: rect(145px, 9999px, 75px, 0);
   }

   65% {
      clip: rect(153px, 9999px, 198px, 0);
   }

   70% {
      clip: rect(99px, 9999px, 136px, 0);
   }

   75% {
      clip: rect(118px, 9999px, 192px, 0);
   }

   80% {
      clip: rect(1px, 9999px, 83px, 0);
   }

   85% {
      clip: rect(145px, 9999px, 98px, 0);
   }

   90% {
      clip: rect(121px, 9999px, 154px, 0);
   }

   95% {
      clip: rect(156px, 9999px, 44px, 0);
   }

   100% {
      clip: rect(67px, 9999px, 122px, 0);
   }
}

@keyframes shift {
   0%, 40%, 44%, 58%, 61%, 65%, 69%, 73%, 100% {
      transform: skewX(0deg);
   }

   41% {
      transform: skewX(10deg);
   }

   42% {
      transform: skewX(-10deg);
   }

   59% {
      transform: skewX(40deg) skewY(10deg);
   }

   60% {
      transform: skewX(-40deg) skewY(-10deg);
   }

   63% {
      transform: skewX(10deg) skewY(-5deg);
   }

   70% {
      transform: skewX(-50deg) skewY(-20deg);
   }

   71% {
      transform: skewX(10deg) skewY(-10deg);
   }
}
</style>
    <div class="main-box">
        
            <div class="glitch" data-glitch="glitch">glitch</div>
       
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
