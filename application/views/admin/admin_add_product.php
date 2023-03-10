<!-- Section: Banner -->
<section class="text-center">
    <div class="p-5 bg-dark">
        <h1 class="text-white">ADMIN: Add Inventory Module</h1>
    </div>
</section>
<section class="text-center p-5">
    <div class="card d-flex justify-content-center align-items-center">
        <img src="<?= base_url('resources/images/inventory.png') ?>" height="200" width="200">
        <div class="card-body">
            <h5 class="card-title fw-bold">Add A Inventory</h5>
            <!-- Form Input -->
            <?= form_open_multipart('Admin/add_product_validation'); ?>
                <div class="row d-flex justify-content-center">    
                    <div class="col-md-6">
                        <div class="card m-2">
                            <div class="card-header">
                                <h1>Preview Image</h1>
                            </div>
                            <div class="card-body">
                                <img id="preview" src="<?= base_url('resources/images/product.png');?>" class="card-img" height="300" width="200">
                            </div>
                            <div class="card-footer">
                                <input class="form-control form-control-lg" name="productimage" type="file" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
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
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="productname" class="form-control" placeholder="Product Name">
                                    </div>
                                    <?php if(form_error('productname')):?>
                                        <small class="text-danger fw-bold fst-italic"><?= form_error('productname'); ?></small>
                                    <?php else:?>
                                        <label class="form-label">Product Name</label>
                                    <?php endif;?>

                                    <!-- Product Description -->
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
                                        <input type="text" name="productdescription" class="form-control" placeholder="Product Description">
                                    </div>
                                    <?php if(form_error('productdescription')):?>
                                        <small class="text-danger fw-bold fst-italic"><?= form_error('productdescription'); ?></small>
                                    <?php else:?>
                                        <label class="form-label">Product Description</label>
                                    <?php endif;?>

                                    <!-- Product Price -->
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                                        <input type="number" min="0" name="productprice" class="form-control" placeholder="Product Price">
                                    </div>
                                    <?php if(form_error('productprice')):?>
                                        <small class="text-danger fw-bold fst-italic"><?= form_error('productprice'); ?></small>
                                    <?php else:?>
                                        <label class="form-label">Product Price</label>
                                    <?php endif;?>

                                    <!-- Product Category -->
                                    <div class="input-group">
                                        <label class="input-group-text" for="inputGroupSelect01">Choose Category</label>
                                        <select class="form-select" name="productcategory" id="inputGroupSelect01">
                                            <option>Real Grade</option>
                                            <option>Master Grade</option>
                                            <option>Perfect Grade</option>
                                            <option>Entry Grade</option>
                                            <option>Super Deformed</option>
                                            <option>High Resolution</option>
                                            <option>Mega Size</option>
                                            <option>Other Gunpla Goods</option>
                                        </select>
                                    </div>
                                    <label class="form-label">Product Category</label>           
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-outline">
                                    <!-- Submit button -->
                                    <a href="<?= site_url('Admin') ?>" class="btn btn-danger btn-block me-5" type="button">Go Back</a>
                                    <button type="submit" class="btn btn-success btn-block">Add Product</button>
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
<?php elseif ($this->session->flashdata('product_error')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('product_error'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
    var myModal = document.getElementById('successModal');
    // Determine when to show the modal
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById('successModal');
        var modal = new bootstrap.Modal(myModal);
        modal.show();
    });
</script>