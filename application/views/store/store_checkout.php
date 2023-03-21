<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 border-end border-2 mb-4 mb-sm-0">
            <h5>Shipping Information</h5>
            <?= form_open('Store/order_fulfill/'. $this->user_id); ?>
            
                <div class="mb-2">
                    <label class="form-label">Complete Address</label>
                    <input type="text" name="address" id="" class="form-control" value="<?= $this->address; ?>">
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('address'); ?> </small>
                </div>

                <div class="mb-2">
                    <label class="form-label">Billing Address</label>
                    <input type="text" name="billing" id="" class="form-control" value="<?= $this->billing; ?>">
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('billing'); ?> </small>
                </div>

                <div class="mb-2">
                    <label class="form-label">Contact Number</label>
                    <input type="number" name="contact" id="" class="form-control" value="<?= $this->contact; ?>">
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('contact'); ?> </small>
                </div>

                <hr>

                <h5>Payment Method</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item form-check">
                                <input class="form-check-input" type="radio" name="payment" data-bs-toggle="collapse" data-bs-target="#onlinetransaction" value="ewallet">
                                <label class="form-check-label">
                                    Gcash | Maya | Debit | Credit
                                </label>
                                <span class="text-end"> Hello world</span>
                            </li>
                            <div class="collapse" id="onlinetransaction">
                                <div class="mb-2">
                                    <label class="form-label">Account Number</label>
                                    <input type="number" name="number" id="" class="form-control">
                                    <small class="text-danger fw-bold fst-italic"> <?= form_error('number'); ?> </small>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Amount</label>
                                    <input type="number" name="amount" id="" class="form-control">
                                    <small class="text-danger fw-bold fst-italic"> <?= form_error('amount'); ?> </small>
                                </div>
                            </div>
                            <li class="list-group-item form-check">
                                <input class="form-check-input" type="radio" name="payment" value="cod">
                                <label class="form-check-label">
                                    Cash on Delivery
                                </label>
                            </li>
                        </ul>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('payment'); ?> </small>
                    </div>
                </div>
                
                <p class="text-wrap" style="font-size: 8px;">Note: *Please take note that all purchases are final and non-refundable.
                We highly encourage our users to carefully review their orders and ensure that all items are correct and meet their expectations before proceeding with the transaction.
                We want to ensure that our customers are fully satisfied with their purchases, and thus we advise everyone to make a final decision before completing their order.</p>
                <div class="text-end mb-2">
                    <button type="submit" class="btn btn-primary">Continue to Payment</button>
                </div>
            <?php form_close(); ?>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Cart</div>
                <div class="card-body">
                    <!-- <ul class="list-group list-group-flush">
                        <?php if($cart_items == NULL): ?>
                            <li class="list-group-item">No Items found</li>
                        <?php else: ?>
                            <?php foreach($cart_items as $items): ?>
                                <li class="list-group-item">
                                    <img src="<?= base_url('resources/images/product/'.$items->product_image);?>" class="border border-dark" alt="..." width="50" >
                                    <?= str_replace('%20',' ',$items->product_name); ?>                                    
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul> -->
                    <div class="table-responsive p-0">
                        <table class="table">                            
                            <?php if($cart_items == NULL): ?>
                                <tr>
                                    <td>No Items found</td>                             
                                </tr>                                                             
                            <?php else: ?>
                                <?php foreach($cart_items as $items): ?>
                                    <tr>
                                        <td scope="row">
                                            <img src="<?= base_url('resources/images/product/'.$items->product_image);?>" class="border border-dark" alt="..." width="50" >
                                            <?= str_replace('%20',' ',$items->product_name); ?>   
                                        </td>
                                        <td>
                                            <a href="<?= site_url('Store/remove_cart/' . $items->order_id); ?>" class="btn btn-danger">Remove</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>                     
                        </table>
                    </div>                                 
                </div>
            </div>

            <hr>

            <table class="table">
                <tr>
                    <td>Total:</td>
                    <!-- Ram -->
                    <?php $total = 0.00; ?>
                    <?php if($cart_items == NULL): ?>
                        <td>₱ <?= $total; ?></td>
                    <?php else: ?>
                        <?php foreach($cart_items as $items): ?>
                            <?php $total += $items->product_price; ?>
                        <?php endforeach; ?>
                        <td>₱ <?= $total; ?></td>
                    <?php endif; ?>
                    <!-- Ram -->
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<?php if ($this->session->flashdata('cart_success')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gaxn5gzy.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('cart_success'); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('cart_error')): ?>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center p-1 m-3">
                        <div class="text-center">
                            <div class="d-flex justify-content-center">                                
                                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ucaemjwr.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                            </div>
                            <h1><?= $this->session->flashdata('cart_error'); ?></h1>
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