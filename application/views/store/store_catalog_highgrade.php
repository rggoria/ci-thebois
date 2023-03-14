<div class="container-fluid py-5" style="background-color: #F3F3F3;">
   <div class="row">
      <div class="col-md-3 mb-5 mb-sm-0">
         <div class="card">
            <div class="card-header">Categories</div>
            <ul class="list-group list-group-flush">
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/high_grade') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> High Grade Gundam</a></li>
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/real_grade') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Real Grade Gundam</a></li>
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/master_grade') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Master Grade Gundam</a></li>
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/perfect_grade') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Perfect Grade Gundam</a></li>
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/entry_grade') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> Entry Graded Gundam</a></li>
               <li class="list-group-item"><a href="<?= site_url('Store/catalog/super_deformed') ?>" class="text-decoration-none"><span><i class="fa-solid fa-robot"></i></span> SD & BB Grade Gundam</a></li>
            </ul>
         </div>
      </div>

      <div class="col-md-9">
            <div class="card">
               <img src="https://d1gt5dppxgb6oq.cloudfront.net/topimg/Gundam_LP/img/grades/high_grade.jpg" alt="" class="card-img-top"  width="768" height="459">
               <div class="card-body">
                  <h2 class="card-title">High Grade Gundam</h2>
                  High Grade Gundam is a line of plastic model kits that offers detailed and affordable models of various mobile suits from the Gundam franchise. They are easy to assemble and offer a great entry point for beginners in the world of Gundam model kits.
                  <hr>

                  <div class="row">
                     <?php if (!$product_list == 0): ?>
                        <?php foreach($product_list as $product): ?>
                           <?php if ($product->product_category == 'High Grade'): ?>
                              <div class="col-lg-3">
                                 <div class="card">
                                    <img src="<?= base_url('resources/images/product/'.$product->product_image);?>" alt="" class="card-img-top img-fluid">
                                    <div class="card-body">
                                       <h5 class="card-title"><?= $product->product_name; ?></h5>
                                       <span class="badge text-bg-warning">Limited Stock</span>
                                       <p class="fw-bold">Pricing: <?= number_format($product->product_price,2) ?></p>
                                       <button class="btn btn-outline-primary">Add to Cart</button>
                                    </div>
                                 </div>
                              </div>
                           <?php else: ?>
                              <?php continue; ?>                           
                           <?php endif; ?>                        
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </div>
                  
               </div>
            </div>
      </div>
   </div>
</div>