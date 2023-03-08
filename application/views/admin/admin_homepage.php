<div class="container-fluid">
    <div class="row flex-wrap">
        <div class="col-auto px-0">
            <!-- Sidebar -->
            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                    <h4 class="list-group-item border-end-0 d-inline-block text-truncate">Admin Panel</h4>
                    <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy">
                        <a class="ps-1 rounded nav-link" href="#simple-list-item-1">Dashboard</a>
                        <a class="ps-1 rounded nav-link" href="#simple-list-item-2">List of Users</a>
                        <a class="ps-1 rounded nav-link" href="#simple-list-item-3">List of Inventory</a>
                        <a class="ps-1 rounded nav-link" href="#simple-list-item-4">List of Shipment</a>
                        <a class="ps-1 rounded nav-link" href="#simple-list-item-5">List of Transaction</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main -->
        <main class="col px-0">
            <div class="row">
                <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <!-- Dashboard Section -->
                    <section class="bg-dark container-fluid" id="simple-list-item-1">
                        <button
                            data-bs-target="#sidebar"
                            data-bs-toggle="collapse"
                            class="border rounded-3 m-1 text-decoration-none"
                            onclick="adminToggle()"
                            id="btnValue"
                            value="Hide">
                            Hide
                        </button>
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
                                        <p class="card-text">1000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-2">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="<?= base_url('resources/images/drop-shipping.png') ?>" class="icon" alt="User icon" height="50">
                                        <h5 class="card-title">Total Shipment</h5>
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
                        </div>
                    </section>
                    <!-- List of Users Section -->
                    <section class="container-fluid px-0" id="simple-list-item-2">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <img src="<?= base_url('resources/images/group.png') ?>" alt="" height="25">
                                <span class="ms-2">List of Users</span>
                                <div class="ms-auto">
                                    <a href="<?= site_url('Admin/add_user') ?>" class="btn btn-success" type="button">Add</a>
                                </div>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011-04-25</td>
                                            <td>$320,800</td>
                                        </tr>
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
                                <div class="ms-auto">
                                    <a href="<?= site_url('Admin/add_inventory') ?>" class="btn btn-success" type="button">Add</a>
                                </div>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <table class="table table-hover">
                                    <caption class="text-center">end of inventory</caption>
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
                        </div>
                    </section>
                    <!-- List of Shipment Section -->
                    <section class="container-fluid px-0" id="simple-list-item-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                
                                <img src="<?= base_url('resources/images/drop-shipping.png') ?>" alt="" height="25">
                                <span class="ms-2">List of Shipment</span>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <table class="table table-hover">
                                    <caption class="text-center">end of shipment</caption>
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
                        </div>
                    </section>
                    <!-- List of Transaction Section -->
                    <section class="container-fluid px-0" id="simple-list-item-5">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                
                                <img src="<?= base_url('resources/images/time-management.png') ?>" alt="" height="25">
                                <span class="ms-2">List of Transaction</span>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <table class="table table-hover">
                                    <caption class="text-center">end of transaction</caption>
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
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</div>
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
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<!-- Data Tables CDN -->
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>