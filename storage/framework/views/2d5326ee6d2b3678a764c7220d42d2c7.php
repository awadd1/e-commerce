<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>
    <?php echo $__env->yieldContent('title'); ?>
  </title>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.nice-number.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.calendar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/add_row_custon.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/mobile_menu.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.exzoom.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/multiple-image-video.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/ranger_style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.classycountdown.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/venobox.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/summernote/summernote-bs4.css')); ?>">

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
  <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>


  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
      <img src="images/dashboard_user.jpg" alt="img" class="img-fluid">
      <p>anik roy</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->


  <!--=============================
    DASHBOARD START
  ==============================-->
<?php echo $__env->yieldContent('content'); ?>
  <!--=============================
    DASHBOARD START
  ==============================-->


  <!--============================
      SCROLL BUTTON START
    ==============================-->
  <div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
  </div>
  <!--============================
    SCROLL BUTTON  END
  ==============================-->


  <!--jquery library js-->
  <script src="<?php echo e(asset('frontend/js/jquery-3.6.0.min.js')); ?>"></script>
  <!--bootstrap js-->
  <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
  <!--font-awesome js-->
  <script src="<?php echo e(asset('frontend/js/Font-Awesome.js')); ?>"></script>
  <!--select2 js-->
  <script src="<?php echo e(asset('frontend/js/select2.min.js')); ?>"></script>
  <!--slick slider js-->
  <script src="<?php echo e(asset('frontend/js/slick.min.js')); ?>"></script>
  <!--simplyCountdown js-->
  <script src="<?php echo e(asset('frontend/js/simplyCountdown.js')); ?>"></script>
  <!--product zoomer js-->
  <script src="<?php echo e(asset('frontend/js/jquery.exzoom.js')); ?>"></script>
  <!--nice-number js-->
  <script src="<?php echo e(asset('frontend/js/jquery.nice-number.min.js')); ?>"></script>
  <!--counter js-->
  <script src="<?php echo e(asset('frontend/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/js/jquery.countup.min.js')); ?>"></script>
  <!--add row js-->
  <script src="<?php echo e(asset('frontend/js/add_row_custon.js')); ?>"></script>
  <!--multiple-image-video js-->
  <script src="<?php echo e(asset('frontend/js/multiple-image-video.js')); ?>"></script>
  <!--sticky sidebar js-->
  <script src="<?php echo e(asset('frontend/js/sticky_sidebar.js')); ?>"></script>
  <!--price ranger js-->
  <script src="<?php echo e(asset('frontend/js/ranger_jquery-ui.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/js/ranger_slider.js')); ?>"></script>
  <!--isotope js-->
  <script src="<?php echo e(asset('frontend/js/isotope.pkgd.min.js')); ?>"></script>
  <!--venobox js-->
  <script src="<?php echo e(asset('frontend/js/venobox.min.js')); ?>"></script>
  <!--classycountdown js-->
  <script src="<?php echo e(asset('frontend/js/jquery.classycountdown.js')); ?>"></script>

  <script src="<?php echo e(asset('backend/assets/modules/summernote/summernote-bs4.js')); ?>"></script>

  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo e(asset('backend/assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


  <!--main/custom js-->
  <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>

  <script>
    /** summernote **/

    $('.summernote').summernote({
        height:150
    })
    /** date picker **/
    $('.datepicker').daterangepicker({
        locale: {
          format: 'YYYY-MM-DD'
        },
        singleDatePicker: true
    });
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

</html><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/layouts/master.blade.php ENDPATH**/ ?>