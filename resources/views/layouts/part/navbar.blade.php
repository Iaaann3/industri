<nav class="navbar navbar-light bg-light">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-between py-3 border-bottom w-100">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"></svg>
                MenitCom
            </a>

            <div>
                @auth
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
                @endauth
            </div>
        </header>
    </div>
</nav>

{{-- NAVBAR BIRU --}}
<nav class="navbar navbar-primary bg-primary">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-between py-3 border-bottom w-100">
            <a href="/" class="d-flex align-items-center text-light text-decoration-none">
                <svg class="bi me-2" width="40" height="32"></svg>
                <span class="fs-4">Berita Dan Informasi Terbaru - Menitcom</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">About</a></li>
            </ul>
        </header>
    </div>
</nav>

