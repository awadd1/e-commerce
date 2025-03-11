<section id="wsus__flash_sell" class="wsus__flash_sell_2">
  <div class=" container">
      <div class="row">
          <div class="col-xl-12">
              <div class="offer_time" style="background: url(<?php echo e(asset('frontend/images/flash_sell_bg.jpg')); ?>)">
                  <div class="wsus__flash_coundown">
                      <span class=" end_text">flash Sale</span>
                      <div class="simply-countdown simply-countdown-one"></div>
                      <a class="common_btn" href="<?php echo e(route('flash-sale')); ?>">see more <i class="fas fa-caret-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="row flash_sell_slider">
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
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($product->id); ?>"><i
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

                        <p class="wsus__price"><?php echo e($settings->currency_icon); ?><?php echo e($product->offer_price); ?> <del><?php echo e($settings->currency_icon); ?><?php echo e($product->price); ?></del></p>
                    <?php else: ?>
                        <p class="wsus__price"><?php echo e($settings->currency_icon); ?><?php echo e($product->price); ?></p>
                        
                    <?php endif; ?>
                    <a class="add_cart" href="#">add to cart</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
      </div>
  </div>
</section>

<!--==========================
    PRODUCT MODAL VIEW START
===========================-->
<?php $__currentLoopData = $flashSaleItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $product = \App\Models\Product::find($item->product_id);
?>
    
<section class="product_popup_modal">
    <div class="modal fade" id="exampleModal-<?php echo e($product->id); ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="row">
                        <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                            <div class="wsus__quick_view_img">
                                <?php if($product->video_link): ?>
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="<?php echo e($product->video_link); ?>">
                                        <i class="fas fa-play"></i>
                                    </a>
                                <?php endif; ?>
                                <div class="row modal_slider">
                                    <div class="col-xl-12">
                                        <div class="modal_slider_img">
                                            <img src="<?php echo e(asset($product->thumb_image)); ?>" alt="product" class="img-fluid w-100">
                                        </div>
                                    </div>

                                    <?php if(count($product->productImageGalleries) == 0): ?>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="<?php echo e(asset($product->thumb_image)); ?>" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                        
                                   
                                    <?php $__currentLoopData = $product->productImageGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xl-12">
                                        <div class="modal_slider_img">
                                            <img src="<?php echo e(asset($productImage->image)); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="wsus__pro_details_text">
                                <a class="title" href="#"><?php echo e($product->name); ?></a>
                                <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>
                                <?php if(checkDiscount($product)): ?>             
                                    <h4><?php echo e($settings->currency_icon); ?><?php echo e($product->offer_price); ?> <del><?php echo e($settings->currency_icon); ?><?php echo e($product->price); ?></del></h4>
                                <?php else: ?>
                                    <h4><?php echo e($settings->currency_icon); ?><?php echo e($product->price); ?></h4>
                                <?php endif; ?>
                                <p class="review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>20 review</span>
                                </p>
                                <p class="description"><?php echo $product->short_description; ?></p>

                                <div class="wsus__selectbox">
                                    <div class="row">
                                   
                                    <?php $__currentLoopData = $product->variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                 
                                    <div class="col-xl-6 col-sm-6">
                                        <h5 class="mb-2"><?php echo e($variant->name); ?>:</h5>
                                        <select class="select_2" name="variants_items[]">
                                            <?php $__currentLoopData = $variant->productVariantItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variantItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($variantItem->id); ?>" <?php echo e($variantItem->is_default == 1 ? 'selected' : ''); ?>><?php echo e($variantItem->name); ?> ($<?php echo e($variantItem->price); ?>)</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </div>
                              
                                <div class="wsus__quentity">
                                    <h5>quentity :</h5>
                                    <form class="select_number">
                                        <input class="number_area" type="text" min="1" max="100" value="1" />
                                    </form>
                                   
                                </div>
                               
                                <ul class="wsus__button_area">
                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                    <li><a class="buy_now" href="#">buy now</a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#"><i class="far fa-random"></i></a></li>
                                </ul>
                                <p class="brand_model"><span>brand :</span> <?php echo e($product->brand->name); ?></p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--==========================
    PRODUCT MODAL VIEW END
===========================-->


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
<?php $__env->stopPush(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/frontend/home/sections/flash-sale.blade.php ENDPATH**/ ?>