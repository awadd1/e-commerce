
<?php $__env->startSection('content'); ?>
  
    <!-- Main Content -->
  
      <section class="section">
        <div class="section-header">
          <h1>Update Variant</h1>
          
        </div>

        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Create Variant</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('admin.products-variant.update',$variant->id )); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo e($variant->name); ?>">
                    </div>
                   
                    <div class="form-group ">
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
      </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/product/product-variant/edit.blade.php ENDPATH**/ ?>