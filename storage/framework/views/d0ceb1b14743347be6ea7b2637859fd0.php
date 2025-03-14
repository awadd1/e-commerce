
<?php $__env->startSection('content'); ?>
  
<section id="wsus__dashboard">
  <div class="container-fluid">
   <?php echo $__env->make('frontend.dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="row">
    <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
      <div class="dashboard_content mt-2 mt-md-0">
        <h3><i class="fal fa-gift-card"></i>create address</h3>
        <div class="wsus__dashboard_add wsus__add_address">
          <form action="<?php echo e(route('user.address.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>name <b>*</b></label>
                  <input type="text" placeholder="Name" name="name">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>email</label>
                  <input type="email" placeholder="Email" name="email">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>phone <b>*</b></label>
                  <input type="text" placeholder="Phone" name="phone">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>country <b>*</b></label>
                  <div class="wsus__topbar_select">
                    <select class="select_2" name="country">
                      <option>Select</option>
                        <?php $__currentLoopData = config('settings.country_list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>State <b>*</b></label>
                  <input type="text" placeholder="state" name="state">
                </div>
              </div>
              
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>City <b>*</b></label>
                  <input type="text" placeholder="city" name="city">
                </div>
              </div>

              
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>zip code <b>*</b></label>
                  <input type="text" placeholder="Zip Code" name="zip">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>Addess <b>*</b></label>
                  <input type="text" placeholder="Address" name="address">
                </div>
              </div>
           
           
              <div class="col-xl-6">
                <button type="submit" class="common_btn">Create</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/frontend/dashboard/address/create.blade.php ENDPATH**/ ?>