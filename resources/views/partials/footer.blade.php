<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    .box-payment{
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .box-payment img{
        width: auto;
        height: 25px;
    }
</style>
<footer>
    <div class="footer">
        <div class="footer-kiri">
            <img src="{{ asset('img/w-logo.png') }}?v={{ time() }}" alt="Logo">
            <p>Kami menyediakan jasa pembuatan website profesional yang responsif, modern, dan sesuai kebutuhan bisnis Anda. Dari desain hingga pengembangan, kami hadir untuk meningkatkan kehadiran digital Anda.</p>
            <ul class="social-icons">
                <li><a href="https://wa.me/6282134749670" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                {{-- <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li> --}}
                <li><a href="https://www.instagram.com/lazz_mxt/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="mailto:lazamediamxt@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </div>

        <div class="footer-tengah">
            <div class="tengah-link">
                <h4>Resource</h4>
                <ul>
                    <li><a href="#home">Wordpress</a></li>
                    <li><a href="#about">Boostrap</a></li>
                    <li><a href="#services">Laravel</a></li>
                    <li><a href="#contact">Livewire</a></li>
                </ul>
            </div>
            <div class="tengah-link">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-kanan">
            <h4>Metode Pembayaran</h4>
            <div class="box-payment">
                <img src="{{ asset('img/dana.png') }}" alt="">
                <img src="{{ asset('img/qris.png') }}" alt="">
                <img src="{{ asset('img/bri.png') }}" alt="">
                <img src="{{ asset('img/bsi.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="copyright-section">
        &copy; MIXUCODE  ||   Elegant and Modern Web Design.
    </div>
</footer>
