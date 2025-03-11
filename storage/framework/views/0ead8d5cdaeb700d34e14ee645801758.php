
<?php $__env->startSection('content'); ?>
  
<section id="wsus__dashboard">
  <div class="container-fluid">
   <?php echo $__env->make('frontend.dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="row">
    <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
      <div class="dashboard_content mt-2 mt-md-0">
        <h3><i class="fal fa-gift-card"></i>create address</h3>
        <div class="wsus__dashboard_add wsus__add_address">
          <form action="<?php echo e(route('user.address.update', $address->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>name <b>*</b></label>
                  <input type="text" placeholder="Name" name="name" value="<?php echo e($address->name); ?>">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>email</label>
                  <input type="email" placeholder="Email" name="email" value="<?php echo e($address->email); ?>">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>phone <b>*</b></label>
                  <input type="text" placeholder="Phone" name="phone" value="<?php echo e($address->phone); ?>">
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>country <b>*</b></label>
                  <div class="wsus__topbar_select">
                    <select class="select_2" name="country">
                      <option>Select</option>
                        <?php $__currentLoopData = config('settings.country_list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option <?php echo e($country == $address->country ? 'selected' : ''); ?> value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>State <b>*</b></label>
                  <input type="text" placeholder="state" name="state" value="<?php echo e($address->state); ?>">
                </div>
              </div>
              
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>City <b>*</b></label>
                  <input type="text" placeholder="city" name="city" value="<?php echo e($address->city); ?>">
                </div>
              </div>

              
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>zip code <b>*</b></label>
                  <input type="text" placeholder="Zip Code" name="zip" value="<?php echo e($address->zip); ?>"> 
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="wsus__add_address_single">
                  <label>Address <b>*</b></label>
                  <input type="text" placeholder="Address" name="address" value="<?php echo e($address->address); ?>">
                </div>
              </div>
           
           
              <div class="col-xl-6">
                <button type="submit" class="common_btn">Update</button>
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
<?php echo $__env->make('frontend.dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/frontend/dashboard/address/edit.blade.php ENDPATH**/ ?>