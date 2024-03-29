<div class="container-fluid py-5" style="background-color: #f3f3f3">
    <div class="row">
        <div class="col-md-3 mb-5 mb-sm-0">
            <div class="card">
                <div class="card-header h1">Admin Panel</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#simple-list-item-1" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Dashboard</a></li>
                    <li class="list-group-item"><a href="#simple-list-item-2" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> List of Users</a></li>                    
                    <li class="list-group-item"><a href="#simple-list-item-3" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> List of Inventory</a></li>
                    <li class="list-group-item"><a href="#simple-list-item-4" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> List of Shipment</a></li>
                    <li class="list-group-item"><a href="#simple-list-item-5" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> List of Transaction</a></li>
                    <li class="list-group-item"><a href="<?= site_url('Admin/logout') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Logout</a></li>
                </ul>            
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">                
                <!-- Main -->
                <main class="col px-0">
                    <div class="row">
                        <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <!-- Dashboard Section -->
                            <section class="bg-dark container-fluid" id="simple-list-item-1">                                
                                <div class="py-4 text-center text-white">
                                    <h1>Welcome to Gundam, Admin:</h1>
                                    <h5>You Can Find All The Grades You Need For Your Dream Gundam Model</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <img src="<?= base_url('resources/images/group.png') ?>" class="icon" alt="User icon" height="50">
                                                <h5 class="card-title">Total Users</h5>
                                                <p class="card-text"><?= $user_count; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <img src="<?= base_url('resources/images/inventory.png') ?>" class="icon" alt="User icon" height="50">
                                                <h5 class="card-title">Total Inventory</h5>
                                                <p class="card-text"><?= $product_count; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <img src="<?= base_url('resources/images/drop-shipping.png') ?>" class="icon" alt="User icon" height="50">
                                                <h5 class="card-title">Total Shipment</h5>
                                                <p class="card-text"><?= $order_count; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <img src="<?= base_url('resources/images/time-management.png') ?>" class="icon" alt="User icon" height="50">
                                                <h5 class="card-title">Total Transaction</h5>
                                                <p class="card-text"><?= $transaction_count; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- List of Users Section -->
                            <section class="container-fluid px-0" id="simple-list-item-2">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <img src="<?= base_url('resources/images/group.png') ?>" alt="" height="25">
                                        <span class="ms-2">List of Users</span>
                                        <div class="ms-auto">
                                            <a href="<?= site_url('Admin/add_courier') ?>" class="btn btn-success" type="button">Add Courier</a>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover" id="userTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Commmand</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!$user_list == 0): ?>
                                                    <?php foreach($user_list as $user): ?>
                                                        <tr>
                                                            <td><?= $user->user_id; ?></td>
                                                            <td><?= $user->user_email; ?></td>
                                                            <td><?= $user->user_status; ?></td>
                                                            <td class="d-flex justify-content-start p-5">
                                                                <?php if ($user->user_status == 'ADMIN' || $user->user_status == 'INVENTORY'): ?>
                                                                    <?php continue; ?>
                                                                <?php elseif($user->user_status == 'DISABLE'): ?>
                                                                    <a href="<?= site_url('Admin/edit_courier/'.$user->user_id) ?>" class="btn btn-warning mx-1" type="button">Edit</a>
                                                                    <a href="<?= site_url('Admin/courier_user/'.$user->user_id) ?>" class="btn btn-info mx-1" type="button">COURIER</a>
                                                                    <a href="<?= site_url('Admin/user_user/'.$user->user_id) ?>" class="btn btn-primary mx-1" type="button">USER</a>
                                                                <?php elseif($user->user_status == 'COURIER'): ?>
                                                                    <a href="<?= site_url('Admin/edit_courier/'.$user->user_id) ?>" class="btn btn-warning mx-1" type="button">Edit</a>
                                                                    <a href="<?= site_url('Admin/disable_user/'.$user->user_id) ?>" class="btn btn-danger mx-1" type="button">DISABLE</a>
                                                                    <a href="<?= site_url('Admin/user_user/'.$user->user_id) ?>" class="btn btn-primary mx-1" type="button">USER</a>
                                                                <?php elseif($user->user_status == 'USER'): ?>
                                                                    <a href="<?= site_url('Admin/edit_courier/'.$user->user_id) ?>" class="btn btn-warning mx-1" type="button">Edit</a>
                                                                    <a href="<?= site_url('Admin/disable_user/'.$user->user_id) ?>" class="btn btn-danger mx-1" type="button">DISABLE</a>
                                                                    <a href="<?= site_url('Admin/courier_user/'.$user->user_id) ?>" class="btn btn-info mx-1" type="button">COURIER</a>
                                                                <?php else: ?>
                                                                    <a href="<?= site_url('Admin/disable_user/'.$user->user_id) ?>" class="btn btn-danger mx-1" type="button">DISABLE</a>
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- List of Inventory Section -->
                            <section class="container-fluid px-0" id="simple-list-item-3">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <img src="<?= base_url('resources/images/inventory.png') ?>" alt="" height="25">
                                        <span class="ms-2">List of Inventory</span>                                        
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover" id="inventoryTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Date Created</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!$product_list == 0): ?>
                                                    <?php foreach($product_list as $product): ?>
                                                        <tr>
                                                            <td><?= $product->product_id; ?></td>
                                                            <td><?= $product->product_name; ?></td>
                                                            <td><?= $product->product_price; ?></td>
                                                            <td><?= $product->product_category; ?></td>
                                                            <td><?= $product->product_status; ?></td>
                                                            <td>
                                                                <p><?= $newdateformat = date("d M Y h:i A", strtotime($product->product_date));?></p>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <!-- List of Shipment Section -->
                            <section class="container-fluid px-0" id="simple-list-item-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        
                                        <img src="<?= base_url('resources/images/drop-shipping.png') ?>" alt="" height="25">
                                        <span class="ms-2">List of Shipment</span>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover" id="shipmentTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Date Created</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!$order_list == 0): ?>
                                                    <?php foreach($order_list as $order): ?>
                                                        <tr>
                                                            <td><?= $order->order_id; ?></td>
                                                            <td><?= $order->order_status; ?></td>
                                                            <td><?= $order->order_date; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <!-- List of Transaction Section -->
                            <section class="container-fluid px-0" id="simple-list-item-5">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        
                                        <img src="<?= base_url('resources/images/time-management.png') ?>" alt="" height="25">
                                        <span class="ms-2">List of Transaction</span>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover" id="transactionTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!$transaction_list == 0): ?>
                                                    <?php foreach($transaction_list as $transaction): ?>
                                                        <tr>
                                                            <td><?= $transaction->transaction_id; ?></td>
                                                            <td><?= $transaction->shipment_status; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<?php if ($this->session->flashdata('user_disable')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('user_disable'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('user_user')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('user_user'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('user_courier')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('user_courier'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('product_disable')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('product_disable'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('product_active')): ?>
    <div class="modal fade" id="disableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('product_active'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>    
</section>

<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

<script>
    function adminToggle() {
        if (document.getElementById("btnValue").value === "Hide") {
            document.getElementById("btnValue").value ="Show";
            document.getElementById("btnValue").innerHTML = "Show";
        } else {
            document.getElementById("btnValue").value = "Hide";
            document.getElementById("btnValue").innerHTML = "Hide";
        }
    }
    $(document).ready( function () {
        $('#userTable').DataTable();
    });
    $(document).ready( function () {
        $('#inventoryTable').DataTable();
    });
    $(document).ready( function () {
        $('#shipmentTable').DataTable();
    });
    $(document).ready( function () {
        $('#transactionTable').DataTable();
    });
    var myModal = document.getElementById('disableModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('disableModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>