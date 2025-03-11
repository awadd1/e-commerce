
<?php $__env->startSection('content'); ?>
  
    <!-- Main Content -->
  
      <section class="section">
        <div class="section-header">
          <h1>Product Variant Items</h1>
          
        </div>

        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Update Variant Item</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('admin.products-variant-item.update', $variantItem->id)); ?>" method="POST">
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
      </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/product/product-variant-item/edit.blade.php ENDPATH**/ ?>