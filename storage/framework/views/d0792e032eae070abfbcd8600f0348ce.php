

<?php $__env->startSection('title'); ?>
<?php echo e($settings->site_name); ?> || Product Variant Item
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  

  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
  <?php echo $__env->make('vendor.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <a href="<?php echo e(route('vendor.products-variant-item.index', ['productId' => $product_id, 'variantId' => $variant_id])); ?>" class="btn btn-warning mb-4"><i class="fas fa-long-arrow-left"></i>
            Back</a>
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Create Variant Item</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
              
                <form action="<?php echo e(route('vendor.products-variant-item.store')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                
                  <div class="form-group wsus_input">
                    <label>Variant Name</label>
                    <input type="text" class="form-control" name="variant_name" value="<?php echo e($variant->name); ?>" readonly>
                  </div>
                  
                  <div class="form-group wsus_input">
                    <input type="hidden" class="form-control" name="variant_id" value="<?php echo e($variant->id); ?>">
                  </div>

                  <div class="form-group wsus_input">
                    <input type="hidden" class="form-control" name="product_id" value="<?php echo e($product->id); ?>">
                  </div>


                  <div class="form-group wsus_input">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>

                  <div class="form-group wsus_input">
                    <label>Price <code>(set 0 for make it free)</code> </label>
                    <input type="text" class="form-control" name="price" value="">
                  </div>

                  <div class="form-group wsus_input">
                    <label for="inputState">Is Default</label>
                    <select id="inputState" class="form-control" name="is_default">
                      <option value="">Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>

                  <div class="form-group wsus_input">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Create</button>

                </form>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/product/product-variant-item/create.blade.php ENDPATH**/ ?>