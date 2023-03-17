<section class="bg-dark py-5 text-center text-white container-fluid">
    <h1>Shipment</h1>
    <h5>Pick one that's nearest to you.</h5>
</section>

<div class="container-fluid my-3">
    <h1>Bulletin Board of Ongoing Orders</h1>
    <section class="border border-dark p-5">
        <div class="row">
            <?php if (!$transaction_list == 0): ?>
                <?php foreach($transaction_list as $transaction): ?>
                    <?php if ($transaction->order_status == 'FULFILL'): ?>
                        <div class="col-md-4 my-1">
                            <div class="card">
                                <p class="card-header">Product No: <?= $order->product_id; ?></p>
                                <img src="<?= base_url('resources/images/product/'.$order->product_image);?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name: <?= $order->product_name; ?></h5>
                                    <p class="card-text">Delivery Address: <?= $order->user_address; ?></p>
                                    <p class="card-text">Order Status: <?= $order->order_status; ?></p>
                                    <p class="card-text">Client Name: <?= $order->user_username; ?></p>
                                    <p class="card-text">Product Price: <?= $order->product_price; ?></p>
                                    <div class="card">
                                        <a href="<?= site_url('Courier/reserved_order/'.$order->order_id) ?>" class="btn btn-white border-dark">Choose Delivery</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card d-flex justify-content-center p-3">
                    <div class="text-center">
                        <h1>There are no orders yet.</h1>
                        <div class="d-flex justify-content-center">                                                        
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_o75swrf7.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                        </div>
                 </div>
        </div>
    </section>
</div>
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="https://png.pngtree.com/png-vector/20191129/ourmid/pngtree-fast-delivery-icon-delivery-icon-png-image_2047531.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">High Grade ID:66993</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Pending</p>
                    <p class="card-text">Estimated Time of Delivery: 2 days 4 hours 15 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="https://png.pngtree.com/png-vector/20191129/ourmid/pngtree-fast-delivery-icon-delivery-icon-png-image_2047531.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Real Grade ID:99328</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Pending</p>
                    <p class="card-text">Estimated Time of Delivery: 5 days 1 hour 6 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="https://png.pngtree.com/png-vector/20191129/ourmid/pngtree-fast-delivery-icon-delivery-icon-png-image_2047531.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Master Grade ID:99432</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Pending</p>
                    <p class="card-text">Estimated Time of Delivery: 1 day 7 hours 27 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/004/637/567/original/warehouse-and-van-delivery-completed-icon-vector.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">First Grade ID:11233</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Delivered</p>
                    <p class="card-text">Estimated Time of Delivery: 2 days 4 hours 15 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/004/637/567/original/warehouse-and-van-delivery-completed-icon-vector.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Advanced Grade ID:55311</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Delivered</p>
                    <p class="card-text">Estimated Time of Delivery: 5 days 1 hour 6 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/004/637/567/original/warehouse-and-van-delivery-completed-icon-vector.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Perfect Grade ID:43234</h5>
                    <p class="card-text">Address: P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                    <p class="card-text">Status: Delivered</p>
                    <p class="card-text">Estimated Time of Delivery: 1 day 7 hours 27 minutes</p>
                    <div class="card">
                        <a href="#" class="btn btn-white border-dark">Choose Delivery</a>
                    </div>
                </div>     
            <?php endif; ?>
        </div>
    </section>
</div>

<div class="container-fluid my-3">
    <h1>Bulletin Board of Ongoing Orderas</h1>
    <section class="border border-dark p-5">
        <div class="row">
            <?php if (!$order_list == 0): ?>
                <?php foreach($order_list as $order): ?>
                    <?php if ($order->order_status == 'RESERVED' && $this->session->userdata('login_id') == $order->order_reserved_id): ?>
                        <div class="col-md-4 my-1">
                            <div class="card">
                                <p class="card-header">Product No: <?= $order->product_id; ?></p>
                                <img src="<?= base_url('resources/images/product/'.$order->product_image);?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name: <?= $order->product_name; ?></h5>
                                    <p class="card-text">Delivery Address: <?= $order->user_address; ?></p>
                                    <p class="card-text">Order Status: <?= $order->order_status; ?></p>
                                    <p class="card-text">Client Name: <?= $order->user_username; ?></p>
                                    <p class="card-text">Product Price: <?= $order->product_price; ?></p>
                                    <a href="<?= site_url('Courier/delivered_order/'.$order->order_id) ?>" class="btn btn-success my-1" type="button">DELIVERED</a>
                                    <a href="<?= site_url('Courier/cancelled_order/'.$order->order_id) ?>" class="btn btn-danger my-1" type="button">CANCEL</a>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($order->order_status == 'DELIVERED' && $this->session->userdata('login_id') == $order->order_reserved_id): ?>
                        <div class="col-md-4 my-1">
                            <div class="card">
                                <p class="card-header">Product No: <?= $order->product_id; ?></p>
                                <img src="<?= base_url('resources/images/product/'.$order->product_image);?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name: <?= $order->product_name; ?></h5>
                                    <p class="card-text">Delivery Address: <?= $order->user_address; ?></p>
                                    <p class="card-text">Order Status: <?= $order->order_status; ?></p>
                                    <p class="card-text">Client Name: <?= $order->user_username; ?></p>
                                    <p class="card-text">Product Price: <?= $order->product_price; ?></p>
                                    <div class="card">
                                        <a href="#" class="btn btn-white border-success">DELIVERED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($order->order_status == 'CANCELLED' && $this->session->userdata('login_id') == $order->order_reserved_id): ?>
                        <div class="col-md-4 my-1">
                            <div class="card">
                                <p class="card-header">Product No: <?= $order->product_id; ?></p>
                                <img src="<?= base_url('resources/images/product/'.$order->product_image);?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name: <?= $order->product_name; ?></h5>
                                    <p class="card-text">Delivery Address: <?= $order->user_address; ?></p>
                                    <p class="card-text">Order Status: <?= $order->order_status; ?></p>
                                    <p class="card-text">Client Name: <?= $order->user_username; ?></p>
                                    <p class="card-text">Product Price: <?= $order->product_price; ?></p>
                                    <div class="card">
                                        <a href="#" class="btn btn-white border-danger">CANCELLED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card d-flex justify-content-center p-3">
                    <div class="text-center">
                        <h1>There are no orders yet.</h1>
                        <div class="d-flex justify-content-center">                                                        
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_o75swrf7.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                        </div>                    
                    </div>
                </div>     
            <?php endif; ?>
        </div>
    </section>
</div>