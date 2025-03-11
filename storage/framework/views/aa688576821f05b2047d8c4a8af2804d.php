

<?php $__env->startSection('content'); ?>
  

  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
  <?php echo $__env->make('vendor.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Create Variant Item</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
              
                <form action="<?php echo e(route('vendor.products-variant-item.update', $variantItem->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="form-group">
                    <label>Variant Name</label>
                    <input type="text" class="form-control" name="variant_name" value="<?php echo e($variantItem->productVariant->name); ?>" readonly>
                  </div>
                  


                  <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($variantItem->name); ?>">
                  </div>

                  <div class="form-group">
                    <label>Price <code>(set 0 for make it free)</code> </label>
                    <input type="text" class="form-control" name="price" value="<?php echo e($variantItem->price); ?>">
                  </div>

                  <div class="form-group ">
                    <label for="inputState">Is Default</label>
                    <select id="inputState" class="form-control" name="is_default">
                      <option value="">Select</option>
                      <option <?php echo e($variantItem->is_default == 1 ? 'selected' : ''); ?> value="1">Yes</option>
                      <option <?php echo e($variantItem->is_default == 0 ? 'selected' : ''); ?> value="0">No</option>
                    </select>
                  </div>

                  <div class="form-group ">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status">
                      <option <?php echo e($variantItem->status == 1 ? 'selected' : ''); ?> value="1">Active</option>
                      <option <?php echo e($variantItem->status == 0 ? 'selected' : ''); ?> value="0">Inactive</option>
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


<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/product/product-variant-item/edit.blade.php ENDPATH**/ ?>