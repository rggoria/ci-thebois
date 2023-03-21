<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="<?= site_url('Store'); ?>" class="navbar-brand">The Bois</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?= site_url('Store'); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Store/catalog/high_grade') ?>" class="nav-link">Shop</a>
            </li>
            <?php if($logged_in): ?>
            
            <li class="nav-item">
                <a href="<?= site_url('Users/profile/'. $user_id); ?>" class="nav-link"><span><i class="fa-solid fa-user"></i></span> Profile</a>
            </li>

            <?php else: ?>

                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        <span><i class="fa-solid fa-user"></i></span> Login
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg-end p-3" style="min-width: 20rem;">
                        <?= form_open('Users/login_user'); ?>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="example@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="your password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button> <br>
                        <?= form_close(); ?>
                        <p class="text-center">Don't have an account? <span role="button" data-bs-toggle="modal" data-bs-target="#staticModal" class="text-primary text-decoration-underline">Sign-up for free!</span></p>
                    </div>
                </li>

            <?php endif; ?>
            
            <li class="nav-item dropdown">
                <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                    <span><i class="fa-solid fa-cart-shopping"></i></span> My Cart
                </div>
                <!-- <div class="dropdown-menu dropdown-menu-lg-end p-3" style="min-width: 30rem;"> -->
                <div class="dropdown-menu dropdown-menu-lg-end p-3">
                    <table class="table dropdown-item" id="checkoutTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($cart_items as $item): ?>
                                <tr>
                                    <td><?= str_replace('%20',' ',$item->product_name); ?></td>
                                    <td><?= $item->product_price ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div><hr class="dropdown-divider"></div>
                    <div class="dropdown-item">
                        <a href="<?= site_url('Store/checkout'); ?>" class="btn btn-primary">Proceed to Checkout</a>
                    </div>
                </div>
                
            </li>
        </ul>
    </div>
</nav>

<!-- Registration Modal -->
<div class="modal fade" id="staticModal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up Form</h5>
                    <button:button class="btn-close" data-bs-dismiss="modal"></button:button>
                </div>

                <div class="modal-body">
                    <?= form_open('Users/register_user'); ?>
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="fname" id="" class="form-control" required>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lname" id="" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Complete Address</label>
                        <input type="text" name="caddress" id="" class="form-control" required>
                        <label class="form-label">Billing Address</label>
                        <input type="text" name="baddress" id="" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="cnumber" id="" class="form-control" required>
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" id="" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>