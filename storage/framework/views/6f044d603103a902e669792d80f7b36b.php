

<?php $__env->startSection('content'); ?>


    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
      <div class="wsus_breadcrumb_overlay">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h4>Flash Sale</h4>
                      <ul>
                          <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                          <li><a href="javascript:;">Flash Sale</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--============================
      BREADCRUMB END
  ==============================-->


  <!--============================
      DAILY DEALS DETAILS START
  ==============================-->
  <section id="wsus__daily_deals">
      <div class="container">
          <div class="wsus__offer_details_area">
              <div class="row">
                  <div class="col-xl-6 col-md-6">
                      <div class="wsus__offer_details_banner">
                          <img src="<?php echo e(asset('frontend/images/offer_banner_2.png')); ?>" alt="offrt img" class="img-fluid w-100">
                          <div class="wsus__offer_details_banner_text">
                              <p>apple watch</p>
                              <span>up 50% 0ff</span>
                              <p>for all poduct</p>
                              <p><b>today only</b></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                      <div class="wsus__offer_details_banner">
                          <img src="<?php echo e(asset('frontend/images/offer_banner_3.png')); ?>" alt="offrt img" class="img-fluid w-100">
                          <div class="wsus__offer_details_banner_text">
                              <p>xiaomi power bank</p>
                              <span>up 37% 0ff</span>
                              <p>for all poduct</p>
                              <p><b>today only</b></p>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xl-12">
                      <div class="wsus__section_header rounded-0">
                          <h3>flash sell</h3>
                          <div class="wsus__offer_countdown">
                              <span class="end_text">ends time :</span>
                              <div class="simply-countdown simply-countdown-one"></div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                <?php $__currentLoopData = $flashSaleItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $product = \App\Models\Product::find($item->product_id);
                ?>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                      
                  <div class="wsus__product_item">
                      <span class="wsus__new"><?php echo e(productType($product->product_type)); ?></span>
                      <?php if(checkDiscount($product)): ?>
                          
                      <span class="wsus__minus">-<?php echo e(calculateDiscountPercent($product->price, $product->offer_price)); ?>%</span>
                      <?php endif; ?>
                      <a class="wsus__pro_link" href="<?php echo e(route('product-detail', $product->slug)); ?>">
                          <img src="<?php echo e(asset($product->thumb_image)); ?>" alt="product" class="img-fluid w-100 img_1" />
                          <img src="
                          <?php if(isset($product->productImageGalleries[0]->image)): ?>
                               <?php echo e(asset($product->productImageGalleries[0]->image)); ?>

                          <?php else: ?>
                               <?php echo e(asset($product->thumb_image)); ?>

                          <?php endif; ?>
                          " alt="product" class="img-fluid w-100 img_2" />
                      </a>
                      <ul class="wsus__single_pro_icon">
                          <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                      class="far fa-eye"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                          <li><a href="#"><i class="far fa-random"></i></a>
                      </ul>
                      <div class="wsus__product_details">
                          <a class="wsus__category" href="#"><?php echo e($product->category->name); ?> </a>
                          <p class="wsus__pro_rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <span>(133 review)</span>
                          </p>
                          <a class="wsus__pro_name" href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e($product->name); ?></a>
                          <?php if(checkDiscount($product)): ?>
      
                              <p class="wsus__price"><?php echo e($settings->currency_icon); ?><?php echo e($product->offer_price); ?> <del>$<?php echo e($product->price); ?></del></p>
                          <?php else: ?>
                              <p class="wsus__price"><?php echo e($settings->currency_icon); ?><?php echo e($product->price); ?></p>
                              
                          <?php endif; ?>
                          <a class="add_cart" href="#">add to cart</a>
                      </div>
                  </div>
                 </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="mt-5">
                <?php if($flashSaleItems->hasPages()): ?>
                  <?php echo e($flashSaleItems->links()); ?>

                <?php endif; ?>
              </div>
          </div>
      </div>
  </section>
  <!--============================
      DAILY DEALS DETAILS END
  ==============================-->


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function(){
         
        
          simplyCountdown('.simply-countdown-one', {
            year:  <?php echo e(date('Y', strtotime($flashSaleDate->end_date))); ?>,
            month: <?php echo e(date('m', strtotime($flashSaleDate->end_date))); ?>,
            day:   <?php echo e(date('d', strtotime($flashSaleDate->end_date))); ?>,
            
          });
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/frontend/pages/flash-sale.blade.php ENDPATH**/ ?>