
    
    <style>
        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }

        .avatar-initial {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #1abc9c; /* Warna latar belakang sesuai tema */
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        /* Optional: Styling untuk Dropdown Header */
        .dropdown-header {
            padding: 10px 20px;
        }

        .dropdown-header .avatar,
        .dropdown-header .avatar-initial {
            width: 40px;
            height: 40px;
        }

        .dropdown-header div {
            margin-left: 0px;
        }

        .dropdown-header strong {
            display: block;
            margin: 0%;
            font-size: 16px;
        }

        .dropdown-header .small {
            font-size: 12px;
            color: #6c757d;
        }
    </style>

    <!-- MINI NAVBAR -->
    <nav class="mini-navbar ">
        <p>Mixucode - Jasa Pembuatan Website Termurah</p>
        <div class="nav-sosmed">
            <ul class="nav-icons">
                <li><a href="https://wa.me/6282134749670" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                {{-- <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li> --}}
                <li><a href="https://www.instagram.com/lazz_mxt/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="mailto:lazamediamxt@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </div>
    </nav>

    <!-- MAIN NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <!-- Logo -->
            <a href="/" aria-label="Go to Home Page">
                <img id="logo" src="" class="img-fluid"
                    style="max-width: 250px; margin-right: 10px; max-height: 30px;"
                    alt="Mixucode Logo - Jasa Pembuatan Website Termurah">
            </a>

            <!-- Toggler Button for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 30px;">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/"
                            aria-label="Go to Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'faq' ? 'active' : '' }}" href="/faq"
                            aria-label="Go to FAQ">Faq</a>
                    </li>

                    {{-- @if (auth()->check() && auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'pengurus' ? 'active' : '' }}" href="/"
                                aria-label="Go to Admin">Admin</a>
                        </li>
                    @endif --}}
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'partner' ? 'active' : '' }}" href="/partner"
                            aria-label="Go to Partner">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'portofolio' ? 'active' : '' }}" href="/portofolio"
                            aria-label="Go to Test">Web Demo</a>
                    </li>

                    <!-- Dropdown Menu for Info Section -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Open Info Menu">
                            Demo Website
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoDropdown">
                            <li><a class="dropdown-item" href="https://selora.mixucode.my.id" target="_blank" aria-label="View Portofolio">Selora</a></li>
                            <li><a class="dropdown-item" href="https://ipnu-ippnu.mixucode.my.id" target="_blank" aria-label="View Our Clients">Advisor</a></li>
                            <li><a class="dropdown-item" href="https://lp01.mixucode.my.id" target="_blank" aria-label="View Our Clients">Flavorbox</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/contact" aria-label="Go to Contact Page">Contact</a></li>
                        </ul>
                    </li> --}}
                </ul>

                <!-- Authentication Links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-label="User Menu">
                                
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <!-- Dropdown Header with Avatar, Name, and Welcome Message -->
                                <li>
                                    <div class="dropdown-header d-flex align-items-center text-start">
                                        @if(auth()->user()->avatar)
                                            <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="avatar me-2">
                                        @else
                                            <div class="avatar-initial me-2">
                                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <div class="small text-muted">Welcome</div>
                                            <strong>{{ auth()->user()->name }}</strong>
                                        </div>
                                    </div>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/dashboard" aria-label="Go to Dashboard"><i
                                            class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                                <li><a class="dropdown-item" href="/user" aria-label="User Settings"><i
                                            class="bi bi-person-fill-gear me-2"></i> User</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item" aria-label="Log Out"><i
                                                class="bi bi-box-arrow-in-left me-2"></i> Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"
                                aria-label="Login"><i class="bi bi-box-arrow-in-right me-2"></i> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <!-- JavaScript untuk Mengelola Scroll -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector('.navbar');

            function handleScroll() {
                if (window.scrollY > 50) { // Anda bisa menyesuaikan nilai ini
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }

            // Panggil fungsi saat halaman di-scroll
            window.addEventListener('scroll', handleScroll);

            // Panggil fungsi saat halaman dimuat ulang untuk memastikan kelas yang benar diterapkan
            handleScroll();
        });
    </script>

