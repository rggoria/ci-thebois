<section class="bg-dark py-5 text-center text-white container-fluid">
    <h1>Shipment</h1>
    <h5>Pick one that's nearest to you.</h5>
</section>

<div class="container-fluid my-3">
    <h1>Bulletin Board of Ongoing Orders</h1>
    <section class="border border-dark p-5">
        <div class="row">
            <?php if (!$order_list == 0): ?>
                <?php foreach($order_list as $order): ?>
                    <?php if ($order->order_status == 'PENDING'): ?>
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