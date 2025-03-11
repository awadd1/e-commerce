
<?php $__env->startSection('content'); ?>
  
 <!-- Main Content -->
  
 <section class="section">
  <div class="section-header">
    <h1>Vendor Profile</h1>
   
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12 ">
        <div class="card">
          <div class="card-header">
            <h4>Update Vendor Profile</h4>
          </div>
          <div class="card-body">
           <form action="<?php echo e(route('admin.vendor-profile.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label>preview</label>
              <br>
              <img width="200px" src="<?php echo e(asset($profile->banner)); ?>" alt="">
            </div>
            <div class="form-group">
              <label>Banner</label>
              <input type="file" class="form-control" name="banner" >
            </div>
            <div class="form-group">
              <label>Shop Name</label>
              <input type="text" class="form-control" name="shop_name" value="<?php echo e($profile->shop_name); ?>">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" name="phone" value="<?php echo e($profile->phone); ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo e($profile->email); ?>">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo e($profile->address); ?>">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="summernote" name="description" ><?php echo e($profile->description); ?></textarea>
            </div>
            <div class="form-group">
              <label>Facebook</label>
              <input type="text" class="form-control" name="fa_link" value="<?php echo e($profile->fa_link); ?>">
            </div>
            <div class="form-group">
              <label>Twitter</label>
              <input type="text" class="form-control" name="tw_link" value="<?php echo e($profile->tw_link); ?>">
            </div>
            <div class="form-group">
              <label>Instegram</label>
              <input type="text" class="form-control" name="insta_link" value="<?php echo e($profile->insta_link); ?>">
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/vendor-profile/index.blade.php ENDPATH**/ ?>