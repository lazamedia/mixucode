<!-- resources/views/partials/navbar.blade.php -->

<style>
    .mini-navbar {
        height: 30px;
        background-color: #f3f3f3;
        width: 100%;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 10pt;
        color: #01658d;
        font-family: 'Poppins';
        padding-top: 6px;
        transition: transform 0.3s ease-in-out; 
    }


    @media(max-width: 768px) {
        .mini-navbar {
            display: none;
        }
    }
</style>



<nav class="mini-navbar">
    <p>Mixucode jasa bikin website</p>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <!-- Logo -->
        <a href="/"><img id="logo" src="{{ asset('img/w-logo.png') }}?v={{ time() }}" class="img-fluid" style="max-width: 250px; margin-right: 10px; max-height: 30px;" alt="Logo"></a>

        {{-- Versi Asli --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>

        {{-- Modif Sidbar --}}
        {{-- <button class="navbar-toggler" type="button" aria-label="Toggle navigation" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'faq') ? 'active' : '' }}" href="/faq">Faq</a>
                </li>
                               
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'project') ? 'active' : '' }}" href="/project">Project</a>
                </li>

                @if (auth()->check() && auth()->user()->hasRole('admin'))
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'pengurus') ? 'active' : '' }}" href="/">Admin</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'partner') ? 'active' : '' }}" href="/partner">Partner</a>
                </li>  
                  
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'test') ? 'active' : '' }}" href="/test">Test</a>
                </li>  

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Info
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/portofolio">Portofolio</a></li>
                        <li><a class="dropdown-item" href="/klien">Klien Kami</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/contact">Contact</a></li>
                    </ul>
                </li>   
            </ul>

            {{-- <ul class="navbar-nav ms-auto"> --}}
                {{-- <!-- Theme Toggle Button -->
                <li class="nav-item">
                    <button id="theme-toggle" class="btn btn-link nav-link" aria-label="Toggle Theme">
                        <i id="theme-icon" class="bi bi-brightness-high"></i>
                    </button>
                </li> --}}

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                        <li><a class="dropdown-item" href="/user"><i class="bi bi-person-fill-gear"></i> User</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Log Out</button>
                            </form>
                        </li>
                    {{-- </ul> --}}
                </li>
                @else
                {{-- <li class="nav-item">
                    <a href="/login" class="nav-link login-btn {{ ($active === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login  </a>
                </li> --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>





