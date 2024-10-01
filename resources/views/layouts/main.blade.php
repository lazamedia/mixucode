<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta name="referrer" content="no-referrer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MIXUCODE {{ isset($title) ? ' - ' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : '' }}</title>



    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Minified Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/layoutsmain.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset ('css/homenew.css') }}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="body--no-scroll">
    <!-- Include Navbar Partial -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div id="main-content">
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
    
    <!-- Minified Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
