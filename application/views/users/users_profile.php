<div class="container-fluid py-5" style="background-color: #F3F3F3">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center mb-3 mb-sm-0">
            <div class="card w-100">
                <img src="" alt="" class="img-fluid img-thumbnail">
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
                            <button class="btn btn-outline-primary w-100">Edit Profile</button>
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