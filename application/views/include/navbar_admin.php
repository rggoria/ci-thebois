<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="User">Gundam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product Categories
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">RG (Real Grade)</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">MG (Master Grade)</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">HG (High Grade)</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">SG (Super Deformed)</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">PG (Perfect Grade)</a></li>
                </ul>
                </li>
            </ul>
            <a href="<?= site_url('Admin'); ?>" class="btn fw-bold me-2">Admin</a>
            <a href="<?= site_url('Login'); ?>" class="btn fw-bold me-2">Gallery</a>
            <a href="<?= site_url('Login'); ?>" class="btn fw-bold me-2">Login</a>
            <a href="<?= site_url('Register'); ?>" class="btn fw-bold me-2">Signup</a>      
            <a href="" class="btn fw-bold">Your Cart</a>      
        </div>
    </div>
</nav>