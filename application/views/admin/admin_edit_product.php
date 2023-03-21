<!-- Section: Banner -->
<section class="text-center">
    <div class="p-5 bg-dark">
        <h1 class="text-white">ADMIN: Edit Product Module</h1>
    </div>
</section>

<section class="text-center p-5">
    <div class="card d-flex justify-content-center align-items-center">
        <img src="<?= base_url('resources/images/group.png') ?>" height="200" width="200">
        <div class="card-body">
            <h5 class="card-title fw-bold">Edit A Courier</h5>
            <!-- Form Input -->
            <?= form_open('Admin/edit_product_validation/'.$product_data->product_id); ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card m-2">
                            <div class="card-body">
                                <img id="preview" src="
                                    <?= base_url('resources/images/product/'.$product_data->product_image);?>" class="card-img" height="400" width="200">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card m-2">
                            <div class="card-header">
                                <h1>Product Details</h1>
                            </div>
                            <div class="card-body">
                                <div class="form-outline">
                                    <!-- Product Name -->
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" name="productname" class="form-control bg-white" value="<?= $product_data->product_name; ?>" readonly>
                                    </div>
                                    <label class="form-label">Product Name</label>
                                    <!-- Product Description -->
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
                                        <input type="text" name="productdescription" class="form-control" placeholder="Product Description" value="<?= $product_data->product_description; ?>">
                                    </div>
                                    <?php if(form_error('productdescription')):?> <small class="text-danger fw-bold fst-italic"> <?= form_error('productdescription'); ?> </small> <?php else:?> <label class="form-label">Product Description</label> <?php endif;?>
                                        <!-- Product Price -->
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                                            <input type="number" min="0" name="productprice" class="form-control" placeholder="Product Price" value="<?= $product_data->product_price; ?>">
                                        </div>
                                    <?php if(form_error('productprice')):?>
                                        <small class="text-danger fw-bold fst-italic"><?= form_error('productprice'); ?></small>
                                    <?php else:?>
                                        <label class="form-label">Product Price</label>
                                    <?php endif;?>
                                    <!-- Product Category -->
                                    <div class="input-group">
                                        <label class="input-group-text" for="inputGroupSelect01">Product Category</label>
                                        <input type="text" name="productcategory" class="form-control bg-white" value="<?= $product_data->product_category; ?>" readonly>
                                    </div>
                                    <label class="form-label">Product Category</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-outline">
                                    <!-- Submit button -->
                                    <a href="<?= site_url('Admin/inventory') ?>" class="btn btn-danger btn-block me-5" type="button">Go Back </a>
                                    <button type="submit" class="btn btn-success btn-block">Edit Product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            <?= form_open_multipart(); ?>
        </div>
    </div>
</section>

<!-- Modal -->
<?php if ($this->session->flashdata('product_success')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('product_success'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
    var myModal = document.getElementById('myModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('successModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>