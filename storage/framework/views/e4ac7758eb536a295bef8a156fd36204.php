<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
  <div class="card border">
    <div class="card-body">
      <form action="<?php echo e(route('admin.general-setting-update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
          <label>Site Name</label>
          <input type="text" class="form-control" name="site_name" value="<?php echo e(@$generalSettings->site_name); ?>">
        </div>
        <div class="form-group">
          <label>Layout</label>
          <select name="layout" id="" class="form-control">
            <option <?php echo e(@$generalSettings->layout == 'LTR' ? 'selected' : ''); ?> value="LTR">LTR</option>
            <option <?php echo e(@$generalSettings->layout == 'RTL' ? 'selected' : ''); ?> value="RTL">RTL</option>

          </select>
        </div>
        <div class="form-group">
          <label>Contact Email</label>
          <input type="text" class="form-control" name="contact_email" value="<?php echo e(@$generalSettings->contact_email); ?>">
        </div>
        <div class="form-group">
          <label>Default Currency Name</label>
          <select name="currency_name" id="" class="form-control select2">
            <option value="">Select</option>
            <?php $__currentLoopData = config('settings.currency_list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e(@$generalSettings->currency_name == $currency ? 'selected' : ''); ?> value="<?php echo e($currency); ?>"><?php echo e($currency); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               

          </select>
        </div>
        <div class="form-group">
          <label>Currency Icon</label>
          <input type="text" class="form-control" name="currency_icon" value="<?php echo e(@$generalSettings->currency_icon); ?>">
        </div>
        <div class="form-group">
          <label>Timezone</label>
          <select name="time_zone" id="" class="form-control select2">
            <option value="">Select</option>
            <?php $__currentLoopData = config('settings.time_zone'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $timeZone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e(@$generalSettings->time_zone == $key ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($key); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
       </form>  
    </div>  
  </div>             
</div><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/setting/general-setting.blade.php ENDPATH**/ ?>