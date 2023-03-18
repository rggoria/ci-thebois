<div class="container-fluid py-5" style="background-color: #F3F3F3">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center mb-3 mb-sm-0">
            <div class="card w-100">
                <div class="card-body text-center">
                    <h2> <?= $fullname ?></h2>
                    A Customer on The Bois Gundam Shop <br>
                    Collector of Gundam <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?= site_url('Users/logout'); ?>" class="btn btn-danger w-100">Logout</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#modalEditProfile">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Complete Address:</h5>
                                </div>
                                <div class="col-md-8">
                                    <?= $address ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Billing Address</h5>
                                </div>
                                <div class="col-md-8">
                                    <?= $billing ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Contact Number</h5>
                                </div>
                                <div class="col-md-8">
                                    <?= $contact ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                    <?= $email ?>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <hr>

                    <h5>Transaction History</h5>
                    <table class="table">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach($transaction_list  as $item): ?>
                            <tr>
                                <th>Order No.</th>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditProfile" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <?= form_open('Users/edit_profile/'. $user_id); ?>
                <div class="mb-3">
                    <label class="form-label">Complete Address</label>
                    <input type="text" name="address" class="form-control" value="<?= $address ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Billing Address</label>
                    <input type="text" name="billing" id="" class="form-control" value="<?= $billing ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Contact Number</label>
                    <input type="text" name="contact" class="form-control" value="<?= $contact ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" id="" class="form-control" value="<?= $email ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Edit Changes</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>