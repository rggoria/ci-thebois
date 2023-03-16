<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 border-end border-2 mb-4 mb-sm-0">
            <h5>Shipping Information</h5>
            <?= form_open('Store/order_fulfill/'. $this->user_id); ?>
                <div class="mb-2">
                    <label class="form-label">Complete Address</label>
                    <input type="text" name="address" id="" class="form-control">
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('address'); ?> </small>
                </div>

                <div class="mb-2">
                    <label class="form-label">Billing Address</label>
                    <input type="text" name="billing" id="" class="form-control">
                    <small class="text-danger fw-bold fst-italic"> <?= form_error('billing'); ?> </small>
                </div>

                <div class="mb-2">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact" id="" class="form-control">
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
                                    <input type="text" name="number" id="" class="form-control">
                                    <small class="text-danger fw-bold fst-italic"> <?= form_error('number'); ?> </small>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Amount</label>
                                    <input type="text" name="amount" id="" class="form-control">
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
                
                <p class="text-wrap" style="font-size: 6px;">Note: *Please take note that all purchases are final and non-refundable.
                We highly encourage our users to carefully review their orders and ensure that all items are correct and meet their expectations before proceeding with the transaction.
                We want to ensure that our customers are fully satisfied with their purchases, and thus we advise everyone to make a final decision before completing their order.</p>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Continue to Payment</button>
                </div>
            <?php form_close(); ?>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Cart</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php if($cart_items == NULL): ?>
                            <li class="list-group-item">No Items found</li>
                        <?php else: ?>
                            <?php foreach($cart_items as $items): ?>
                                <li class="list-group-item">
                                    <?= str_replace('%20',' ',$items->product_name); ?>                                    
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
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