<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gundam</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <a href="<?= site_url('Courier') ?>" class="btn fw-bold me-2">Shipment</a>
            <a href="<?= site_url('Courier/courier_profile') ?>" class="btn fw-bold me-2"><?= $this->session->userdata('login_username'); ?></a>
            <a href="<?= site_url('Courier/logout') ?>" class="btn fw-bold me-2">Signout</a>            
        </div>
    </div>
</nav>