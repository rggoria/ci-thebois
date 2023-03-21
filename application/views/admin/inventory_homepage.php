<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h2 class="card-title">Inventory Panel</h2>
            <div class="ms-auto">
                <a href="<?= site_url('Admin/logout') ?>" class="btn btn-danger" type="button">Logout</a>
            </div>
        </div>

        <hr>    
        
        <div class="card-header d-flex align-items-center">
            <img src="<?= base_url('resources/images/inventory.png') ?>" alt="" height="25">
            <span class="ms-2">List of Inventory</span>
            <div class="ms-auto">
                <a href="<?= site_url('Admin/add_product') ?>" class="btn btn-success" type="button">Add Product</a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover" id="inventoryTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Commmand</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!$product_list == 0): ?>
                        <?php foreach($product_list as $product): ?>
                            <tr>
                                <td><?= $product->product_id; ?></td>
                                <td><img src="<?= base_url('resources/images/product/'.$product->product_image) ?>" alt="" height="100"></td>
                                <td><?= $product->product_name; ?></td>
                                <td><?= $product->product_price; ?></td>
                                <td><?= $product->product_category; ?></td>
                                <td><?= $product->product_status; ?></td>
                                <td>
                                    <p><?= $newdateformat = date("d M Y h:i A", strtotime($product->product_date));?></p>
                                </td>
                                <td class="d-flex justify-content-start p-5">
                                    <?php if($product->product_status == 'ACTIVE'): ?>
                                        <a href="<?= site_url('Admin/edit_product/'.$product->product_id) ?>" class="btn btn-warning mx-1" type="button">Edit</a>
                                        <a href="<?= site_url('Admin/disable_product/'.$product->product_id) ?>" class="btn btn-danger mx-1" type="button">DISABLE</a>
                                    <?php else: ?>
                                        <a href="<?= site_url('Admin/edit_product/'.$product->product_id) ?>" class="btn btn-warning mx-1" type="button">Edit</a>
                                        <a href="<?= site_url('Admin/active_product/'.$product->product_id) ?>" class="btn btn-primary mx-1" type="button">ACTIVE</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
              
    </div>
</div>
