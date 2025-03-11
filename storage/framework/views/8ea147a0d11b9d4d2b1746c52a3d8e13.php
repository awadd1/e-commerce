
<?php $__env->startSection('content'); ?>
  
    <!-- Main Content -->
  
      <section class="section">
        <div class="section-header">
          <h1>Product Image Gallery</h1>
        </div>
        <div class="mb-3">
          <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary">Back</a>
        </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Product: <?php echo e($product->name); ?></h4>
                  </div>
                  <div class="card-body">
                  <form action="<?php echo e(route('admin.products-image-gallery.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="">Image <code>(Multiple image supported!)</code> </label>
                      <input type="file" name="image[]" class="form-control" multiple>
                      <input type="hidden" name="product" value="<?php echo e($product->id); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </form>
                </div>

              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>All Images</h4>
                
                </div>
                <div class="card-body">
                  <?php echo e($dataTable->table()); ?>


                </div>
                
              </div>
            </div>
            
          </div>
        
        </div>
      </section>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/product/image-gallery/index.blade.php ENDPATH**/ ?>