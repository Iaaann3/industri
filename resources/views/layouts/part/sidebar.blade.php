{{-- ISI HALAMAN (SIDEBAR + KONTEN) --}}
<div class="container-fluid">
    <div class="row">

        {{-- SIDEBAR --}}
        <div class="col-md-3 col-lg-2 bg-dark text-white p-3 min-vh-100">
            <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"></svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li><a href="#" class="nav-link text-white">Dashboard</a></li>
                <li><a href="#" class="nav-link text-white">Orders</a></li>
                <li><a href="#" class="nav-link text-white">Products</a></li>
                <li><a href="#" class="nav-link text-white">Customers</a></li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
