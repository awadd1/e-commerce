

<?php $__env->startSection('title'); ?>
<?php echo e($settings->site_name); ?> || Shop Profile
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
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Shop profile</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                
                <form action="<?php echo e(route('vendor.shop-profile.store')); ?>" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group wsus_input">
                    <label>preview</label>
                    <br>
                    <img width="200px" src="<?php echo e(asset($profile->banner)); ?>" alt="">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Banner</label>
                    <input type="file" class="form-control" name="banner" >
                  </div>
                  <div class="form-group wsus_input">
                    <label>Shop Name</label>
                    <input type="text" class="form-control" name="shop_name" value="<?php echo e($profile->shop_name); ?>">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo e($profile->phone); ?>">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo e($profile->email); ?>">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo e($profile->address); ?>">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Description</label>
                    <textarea class="summernote" name="description" ><?php echo e($profile->description); ?></textarea>
                  </div>
                  <div class="form-group wsus_input">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="fa_link" value="<?php echo e($profile->fa_link); ?>">
                  </div>
                  <div class="form-group wsus_input">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="tw_link" value="<?php echo e($profile->tw_link); ?>">
                  </div>
                  <div class="form-group wsus_input">
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
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/shop-profile/index.blade.php ENDPATH**/ ?>