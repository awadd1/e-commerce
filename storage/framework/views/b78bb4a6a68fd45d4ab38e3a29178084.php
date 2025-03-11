
<?php $__env->startSection('title'); ?>
<?php echo e($settings->site_name); ?> || e-Commerce HTML Template
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  
  <!--============================
      BANNER PART 2 START
  ==============================-->
<?php echo $__env->make('frontend.home.sections.banner-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--============================
      BANNER PART 2 END
  ==============================-->


  <!--============================
      FLASH SELL START
  ==============================-->
<?php echo $__env->make('frontend.home.sections.flash-sale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
  <!--============================
      FLASH SELL END
  ==============================-->


  <!--============================
     MONTHLY TOP PRODUCT START
  ==============================-->
  

  <!--============================
     MONTHLY TOP PRODUCT END
  ==============================-->


  <!--============================
      BRAND SLIDER START
  ==============================-->
  
  
  <!--============================
      BRAND SLIDER END
  ==============================-->


  <!--============================
      SINGLE BANNER START
  ==============================-->
  
 
  <!--============================
      SINGLE BANNER END  
  ==============================-->


  <!--============================
      HOT DEALS START
  ==============================-->
  

  <!--============================
      HOT DEALS END  
  ==============================-->


  <!--============================
      ELECTRONIC PART START  
  ==============================-->
  
  
  <!--============================
      ELECTRONIC PART END  
  ==============================-->


  <!--============================
      ELECTRONIC PART START  
  ==============================-->
 
  

  <!--============================
      ELECTRONIC PART END  
  ==============================-->

  <!--============================
      LARGE BANNER  START  
  ==============================-->
  
  
  <!--============================
      LARGE BANNER  END  
  ==============================-->


  <!--============================
      WEEKLY BEST ITEM START  
  ==============================-->
  
  

  <!--============================
      WEEKLY BEST ITEM END 
  ==============================-->


  <!--============================
    HOME SERVICES START
  ==============================-->

  

  <!--============================
      HOME SERVICES END
  ==============================-->


  <!--============================
      HOME BLOGS START
  ==============================-->
  

  <!--============================
      HOME BLOGS END
  ==============================-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/frontend/home/home.blade.php ENDPATH**/ ?>