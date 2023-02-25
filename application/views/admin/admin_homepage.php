<!-- Hero Section -->
<section class="bg-dark py-5 text-center text-white container-fluid">
    <h1>Welcome to Gundam, Admin:</h1>
    <h5>You Can Find All The Grades You Need For Your Dream Gundam Model</h5>
</section>

<!-- Dashboard Section -->
<section>
    <div class="container my-3">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="<?= base_url('resources/images/group.png') ?>" class="icon" alt="User icon" height="50">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">1000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="<?= base_url('resources/images/inventory.png') ?>" class="icon" alt="User icon" height="50">
                        <h5 class="card-title">Total Inventory</h5>
                        <p class="card-text">1000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="<?= base_url('resources/images/time-management.png') ?>" class="icon" alt="User icon" height="50">
                        <h5 class="card-title">Total Transaction</h5>
                        <p class="card-text">1000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="<?= base_url('resources/images/drop-shipping.png') ?>" class="icon" alt="User icon" height="50">
                        <h5 class="card-title">Total Dropship</h5>
                        <p class="card-text">1000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Table Section -->
<section>
    <div class="container mb-5">
        <h2>Table of Contents</h2>
        <div class="card">
            <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="false">Users
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link" id="transaction-tab" data-bs-toggle="tab" data-bs-target="#transaction" type="button" role="tab" aria-controls="transaction" aria-selected="false">Transaction
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link" id="dropship-tab" data-bs-toggle="tab" data-bs-target="#dropship" type="button" role="tab" aria-controls="dropship" aria-selected="false">Dropship
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <table class="table table-hover">
                        <div class="ms-2 d-flex align-items-center">                                                        
                            <img src="<?= base_url('resources/images/group.png') ?>" alt="" height="25">
                            <span class="ms-2">List of Users</span>
                            <div class="ms-auto">
                                <button>Add</button>
                                <button>2</button>
                            </div>
                        </div>
                        <caption class="text-center">end of users</caption>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="mailto:john.doe@example.com">john.doe@example.com</a></td>
                            <td><a href="tel:+1234567890">User</a></td>
                            </tr>
                            <tr>
                            <td><a href="#">Jane Doe</a></td>
                            <td><a href="mailto:jane.doe@example.com">jane.doe@example.com</a></td>
                            <td><a href="tel:+1234567890">Admin</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                    <table class="table table-hover">
                        <caption class="text-center">end of users</caption>
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="mailto:john.doe@example.com">john.doe@example.com</a></td>
                            <td><a href="tel:+1234567890">User</a></td>
                            </tr>
                            <tr>
                            <td><a href="#">Jane Doe</a></td>
                            <td><a href="mailto:jane.doe@example.com">jane.doe@example.com</a></td>
                            <td><a href="tel:+1234567890">Admin</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="transaction" role="tabpanel" aria-labelledby="transaction-tab">
                    ...
                </div>
                <div class="tab-pane fade" id="dropship" role="tabpanel" aria-labelledby="dropship-tab">
                    ...
                </div>
            </div>
        </div>
    </div>
</section>


