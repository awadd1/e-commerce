
<?php $__env->startSection('content'); ?>
  
    <!-- Main Content -->
  
      <section class="section">
        <div class="section-header">
          <h1>Flash Sale</h1>
        </div> 

        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Flash Sale End Date</h4>
                 
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('admin.flash-sale.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="">
                      <div class="form-group">
                        <label>Sale End Date</label>
                        <input type="text" class="form-control datepicker" name="end_date" value="<?php echo e(@$flashSaleDate->end_date); ?>">
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
        
                  </form>

                </div>
                
              </div>
            </div>
            
          </div>
        
        </div>

        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>Add Flash Sale Products</h4>
                 
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('admin.flash-sale.add-product')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                     <label>Add Product</label>
                     <select name="product" id="" class="form-control select2">
                      <option value="">Select</option> 
                       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option> 
                      
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Show at home?</label>
                          <select name="show_at_home" id="" class="form-control ">
                           <option value="">Select</option> 
                           <option value="1">Yes</option> 
                           <option value="0">No</option> 
                          </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Status?</label>
                          <select name="status" id="" class="form-control ">
                           <option value="">Select</option> 
                           <option value="1">Active</option> 
                           <option value="0">Inactive</option> 
                          </select>
                          </div>
                      </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Save</button>
                 
        
                  </form>

                </div>
                
              </div>
            </div>
            
          </div>
        
        </div>
        
        <div class="section-body">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4>All Flash Sale Products</h4>
                 
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


  <script>
    $(document).ready(function(){
      // change the flash sale status
      $('body').on('click', '.change-status', function(){
        let isChecked = $(this).is(':checked');
        let id = $(this).data('id');

        $.ajax({
            url:"<?php echo e(route('admin.flash-sale-status')); ?>",
            method:'PUT',
            data:{
              status : isChecked,
              id: id
            },
            success: function(data){
              toastr.success(data.message)
            },
            error: function(xhr, status, error){
              console.log(error);
            }
         })
      })

      // change show at home status
      $('body').on('click', '.change-at-home-status', function(){
        let isChecked = $(this).is(':checked');
        let id = $(this).data('id');

        $.ajax({
            url:"<?php echo e(route('admin.flash-sale.show-at-home.change-status')); ?>",
            method:'PUT',
            data:{
              status : isChecked,
              id: id
            },
            success: function(data){
              toastr.success(data.message)
            },
            error: function(xhr, status, error){
              console.log(error);
            }
         })
      })
    })
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/flash-sale/index.blade.php ENDPATH**/ ?>