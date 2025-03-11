

<?php $__env->startSection('content'); ?>
  

  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
  <?php echo $__env->make('vendor.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <a href="<?php echo e(route('vendor.products-variant.index', ['product' => $variant->product_id])); ?>" class="btn btn-warning mb-4"><i class="fas fa-long-arrow-left"></i>
            Back</a>
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Update Variant</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <form action="<?php echo e(route('vendor.products-variant.update', $variant->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="form-group wsus_input">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($variant->name); ?>">
                  </div>
               
                  <div class="form-group wsus_input ">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status">
                      <option <?php echo e($variant->status == 1 ? 'selected' : ''); ?> value="1">Active</option>
                      <option <?php echo e($variant->status == 0 ? 'selected' : ''); ?> value="0">Inactive</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>

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


<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/product/product-variant/edit.blade.php ENDPATH**/ ?>