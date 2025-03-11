
<?php $__env->startSection('content'); ?>
  
    <!-- Main Content -->
  
      <section class="section">
        <div class="section-header">
          <h1>Shipping Rule</h1>
          
        </div>

        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Update Shipping Rule</h4>
                 
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('admin.shipping-rule.update', $shipping->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo e($shipping->name); ?>">
                    </div>

                    <div class="form-group ">
                      <label for="inputState">Type</label>
                      <select id="" class="form-control shipping-type" name="type">
                        <option <?php echo e($shipping->type == 'flat_cost' ? 'selected' : ''); ?> value="flat_cost">Flat Cost</option>
                        <option <?php echo e($shipping->type == 'min_cost' ? 'selected' : ''); ?> value="min_cost">Minimum Order Amount</option>
                      </select>
                    </div>
                    
                    <div class="form-group min_cost <?php echo e($shipping->type == 'min_cost' ? '' : 'd-none'); ?>">
                      <label>Minimum Amount</label>
                      <input type="text" class="form-control" name="min_cost" value="<?php echo e($shipping->min_cost); ?>">
                    </div>

                    <div class="form-group">
                      <label>Cost</label>
                      <input type="text" class="form-control" name="cost" value="<?php echo e($shipping->cost); ?>">
                    </div>
                    
                    <div class="form-group ">
                      <label for="inputState">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option <?php echo e($shipping->status == 1 ? 'selected' : ''); ?> value="1">Active</option>
                        <option <?php echo e($shipping->status == 0 ? 'selected' : ''); ?> value="0">Inactive</option>
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

<?php $__env->startPush('scripts'); ?>
  <script>
    $(document).ready(function(){
      $('body').on('change', '.shipping-type', function(){
        let value = $(this).val();

        if(value != 'min_cost'){
          $('.min_cost').addClass('d-none')
        }else {
          $('.min_cost').removeClass('d-none')
        }
      })
    })
  </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/shipping-rule/edit.blade.php ENDPATH**/ ?>