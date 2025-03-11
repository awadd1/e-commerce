

<?php $__env->startSection('title'); ?>
<?php echo e($settings->site_name); ?> || Product Variant
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
          <a href="<?php echo e(route('vendor.products.index')); ?>" class="btn btn-warning mb-4"><i class="fas fa-long-arrow-left"></i>
            Back</a>
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Product Variant</h3>
            <h6>Product: <?php echo e($product->name); ?></h6>
            <div class="create_button">
                <a href="<?php echo e(route('vendor.products-variant.create', ['product' => $product->id])); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Create Variant</a>
            </div>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                
                <?php echo e($dataTable->table()); ?>

                
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

<?php $__env->startPush('scripts'); ?>
<?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>


<script>

  $(document).ready(function(){
    $('body').on('click', '.change-status', function(){
      let isChecked = $(this).is(':checked');
      let id = $(this).data('id');

      $.ajax({
          url:"<?php echo e(route('vendor.products-variant.change-status')); ?>",
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
<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/product/product-variant/index.blade.php ENDPATH**/ ?>