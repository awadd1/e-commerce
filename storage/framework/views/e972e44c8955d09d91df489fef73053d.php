<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/weather-icon/css/weather-icons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/summernote/summernote-bs4.css')); ?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap-iconpicker.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/select2/dist/css/select2.min.css')); ?>">


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/components.css')); ?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- navbar Content -->

      <?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      <!-- sidebar Content -->

      <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   

      <!-- Main Content -->
      <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('backend/assets/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/stisla.js')); ?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo e(asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/modules/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/summernote/summernote-bs4.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo e(asset('backend/assets/js/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('backend/assets/js/page/index-0.js')); ?>"></script>
  

  <!-- Template JS File -->
  <script src="<?php echo e(asset('backend/assets/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/custom.js')); ?>"></script>

  <script> 
       <?php if($errors->any()): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          toastr.error("<?php echo e($error); ?>")

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
          <?php endif; ?>
  </script>

  <!-- dynamic delete alert -->

  <script>
    $(document).ready(function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });


      $('body').on('click' , '.delete-item', function(event){
        event.preventDefault();

        let deleteUrl = $(this).attr('href');

      Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
          }).then((result) => {
          if (result.isConfirmed) {

              $.ajax({
                type: 'DELETE',
                 url: deleteUrl,

                 success: function(data){

                  if(data.status== 'success'){

                    Swal.fire(
                      'Deleted!',
                      data.message
                  )
                  window.location.reload();
                  }else if(data.status == 'error'){
                    Swal.fire(
                      'cant delete!',
                      data.message,
                      'error'
                  )
                  }
                 },
                 error: function(xhr, status, error){ 
                  console.log(error);
                 }
              })


            
          }
        });
      })
    })
  </script>


  <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>
</html><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>