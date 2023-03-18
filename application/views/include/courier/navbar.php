<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Gundam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?= site_url('Courier'); ?>" class="nav-link">Shipment</a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Courier/courier_profile') ?>" class="nav-link"><?= $this->login_fullname; ?></a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Courier/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>