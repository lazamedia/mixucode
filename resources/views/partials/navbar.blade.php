
    <style>
       
    </style>

    <!-- MINI NAVBAR -->
    <nav class="mini-navbar">
        <p>Mixucode - Jasa Pembuatan Website Termurah</p>
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/"
                            aria-label="Go to Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'faq' ? 'active' : '' }}" href="/faq"
                            aria-label="Go to FAQ">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'project' ? 'active' : '' }}" href="/project"
                            aria-label="Go to Project">Project</a>
                    </li>

                    @if (auth()->check() && auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'pengurus' ? 'active' : '' }}" href="/"
                                aria-label="Go to Admin">Admin</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'partner' ? 'active' : '' }}" href="/partner"
                            aria-label="Go to Partner">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'test' ? 'active' : '' }}" href="/test"
                            aria-label="Go to Test">Test</a>
                    </li>

                    <!-- Dropdown Menu for Info Section -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Open Info Menu">
                            Demo Website
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoDropdown">
                            <li><a class="dropdown-item" href="https://selora.mixucode.my.id" target="_blank" aria-label="View Portofolio">Selora</a></li>
                            <li><a class="dropdown-item" href="https://ipnu-ippnu.mixucode.my.id" target="_blank" aria-label="View Our Clients">Advisor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/contact" aria-label="Go to Contact Page">Contact</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Authentication Links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-label="User Menu">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/dashboard" aria-label="Go to Dashboard"><i
                                            class="bi bi-speedometer2"></i> Dashboard</a></li>
                                <li><a class="dropdown-item" href="/user" aria-label="User Settings"><i
                                            class="bi bi-person-fill-gear"></i> User</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item" aria-label="Log Out"><i
                                                class="bi bi-box-arrow-in-left"></i> Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/portofolio" class="nav-link project-btn {{ $active === 'portofolio' ? 'active' : '' }}"
                                aria-label="project">Portofolio</a>
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
</body>
</html>
