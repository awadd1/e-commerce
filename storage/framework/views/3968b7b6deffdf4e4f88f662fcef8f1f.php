<div class="dashboard_sidebar">
  <span class="close_icon">
    <i class="far fa-bars dash_bar"></i>
    <i class="far fa-times dash_close"></i>
  </span>
  <a href="dsahboard.html" class="dash_logo"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
  <ul class="dashboard_link">
    <li><a class="active" href="dsahboard.html"><i class="fas fa-tachometer"></i>Dashboard</a></li>
    <li><a href="<?php echo e(route('vendor.products.index')); ?>"><i class="far fa-user"></i> Products</a></li>
    <li><a href="<?php echo e(route('vendor.shop-profile.index')); ?>"><i class="far fa-user"></i> Shop Profile</a></li>
    <li><a href="<?php echo e(route('vendor.profile')); ?>"><i class="far fa-user"></i> My Profile</a></li>
    <li>
         
         <form method="POST" action="<?php echo e(route('logout')); ?>">
          <?php echo csrf_field(); ?>
          <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
          this.closest('form').submit();" ><i class="far fa-sign-out-alt"></i> Log out</a>
         
      </form>
    </li>
    
  </ul>
</div><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/layouts/sidebar.blade.php ENDPATH**/ ?>