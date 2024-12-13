<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO and Verification Tags -->
    <meta name="google-site-verification" content="pCElc9B-XbHbMZssc8IPICpTScEeMgz5tLzGCQJlmQU" /> <!-- Verifikasi Google Search Console -->
    <meta name="description" content="Mixucode - Jasa pembuatan website termurah dan terpercaya di Indonesia. Dapatkan layanan profesional untuk membangun website impian Anda bersama Lazuardi Mandegar.">
    <meta name="keywords" content="jasa pembuatan website, pembuatan website murah, jasa website, website profesional, Lazuardi Mandegar, Mixucode">
    <meta name="author" content="Lazuardi Mandegar">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mixucode.my.id" />
    
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Mixucode - Jasa Pembuatan Website Termurah">
    <meta property="og:description" content="Mixucode menyediakan jasa pembuatan website termurah dan berkualitas. Dikelola oleh Lazuardi Mandegar, ahli dalam pengembangan website.">
    <meta property="og:image" content="https://mixucode.my.id/assets/images/logo.jpg">
    <meta property="og:url" content="https://mixucode.my.id">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mixucode - Jasa Pembuatan Website Termurah">
    <meta name="twitter:description" content="Layanan profesional pembuatan website murah bersama Lazuardi Mandegar.">
    <meta name="twitter:image" content="https://mixucode.my.id/assets/images/logo.jpg">

    <!-- Page Title -->
    <title>MIXUCODE {{ isset($title) ? ' - ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : '' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/layoutsmain.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.min.js') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .main-content{
                /* padding: 80px 0px; */
                box-sizing: border-box;
        }
        }
    </style>
</head>

<body class="body--no-scroll">

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div id="main-content mt-5">
        @yield('container')

        {{-- Tampilkan hanya pada halaman home dan faq --}}
        @if (request()->is('/') || request()->is('faq'))
            @include('partials.sosmed')
        @endif
    </div>

    {{-- Jangan tampilkan footer di halaman login --}}
    @if (!request()->is('login'))
        @include('partials.footer')
    @endif
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16755208390">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16755208390');
    </script>

    <!-- Custom Script with Manual Cache Buster -->
    <script>
        window.addEventListener('load', function () {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
            document.body.classList.remove('body--no-scroll');
        });
    </script>

</body>

</html>
