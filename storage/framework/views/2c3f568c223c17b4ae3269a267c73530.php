

<?php $__env->startSection('title'); ?>
<?php echo e($settings->site_name); ?> || Product 
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
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Create Product</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <form action="<?php echo e(route('vendor.products.store')); ?>" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
      
                  <div class="form-group wsus_input">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
      
                  <div class="form-group wsus_input">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                  </div>
      
                   <div class="row" >
                    <div class="col-md-4">
                      <div class="form-group wsus_input">
                        <label for="inputState">Category</label>
                        <select id="inputState" class="form-control main-category" name="category">
                          <option value="">Select</option>
                         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4" >
                      <div class="form-group wsus_input">
                        <label for="inputState">Sub Category</label>
                        <select id="inputState" class="form-control sub-category" name="sub_category">
                          <option value="">Select</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group wsus_input">
                        <label for="inputState">Child Category</label>
                        <select id="inputState" class="form-control child-category" name="child_category">
                          <option value="">Select</option>
                        </select>
                      </div>
                    </div>
                   </div>
                
                
                  <div class="form-group wsus_input">
                   <label for="inputState">Brand</label>
                      <select id="inputState" class="form-control " name="brand">
                        <option value="">Select</option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
                      </select>
                   </div>
               
                
                  <div class="form-group wsus_input">
                  <label>SKU</label>
                  <input type="text" class="form-control" name="sku" value="<?php echo e(old('sku')); ?>">
                </div>
                
                <div class="form-group wsus_input">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="<?php echo e(old('price')); ?>">
                </div>
                
                <div class="form-group wsus_input">
                  <label>Offer Price</label>
                  <input type="text" class="form-control" name="offer_price" value="<?php echo e(old('offer_price')); ?>">
                </div>
      
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group wsus_input">
                      <label>Offer Srart Date</label>
                      <input type="text" class="form-control datepicker" name="offer_start_date" value="<?php echo e(old('offer_start_date')); ?>">
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <div class="form-group wsus_input">
                      <label>Offer End Date</label>
                      <input type="text" class="form-control datepicker" name="offer_end_date" value="<?php echo e(old('offer_end_date')); ?>">
                    </div>
                  </div>
                </div>
      
                <div class="form-group wsus_input">
                  <label>Stock Quantity</label>
                  <input type="number" min="0" class="form-control" name="qty" value="<?php echo e(old('qty')); ?>">
                </div>
      
                <div class="form-group wsus_input">
                  <label>Video Link</label>
                  <input type="text" class="form-control" name="video_link" value="<?php echo e(old('video_link')); ?>">
                </div>
      
                <div class="form-group wsus_input">
                  <label>Short Description</label>
                  <textarea name="short_description" class="form-control" ></textarea>
                </div>
      
                <div class="form-group wsus_input">
                  <label>Long Description</label>
                  <textarea name="long_description" class="form-control summernote" ></textarea>
                </div>
      
              
                    
                 
                  <div class="form-group wsus_input">
                    <label for="inputState">Product Type</label>
                    <select id="inputState" class="form-control" name="product_type">
                      <option value="">Select</option>
                      <option value="new_arrival">New Arrival</option>
                      <option value="featured_product">Featured</option>
                      <option value="top_product">Top Product</option>
                      <option value="best_product">Best Product</option>
      
      
      
                    </select>
                  </div>
                 
                
      
                <div class="form-group wsus_input">
                  <label>Seo Title</label>
                  <input type="text" class="form-control" name="seo_title" value="<?php echo e(old('seo_title')); ?>">
                </div>
      
                <div class="form-group wsus_input">
                  <label>Seo Description</label>
                  <textarea name="seo_description" class="form-control" ></textarea>
                </div>
      
                
                  <div class="form-group wsus_input">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                 </form>
               
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
    <script>
      $(document).ready(function(){
        $('body').on('change', '.main-category', function(e){
          let id = $(this).val();
          $.ajax({
            method:'GET',
            url:"<?php echo e(route('vendor.product.get-subcategories')); ?>",
            data: {
                 id:id
            },
            success: function(data){
                 
                  $('.sub-category').html('<option value="">Select</option>')
                  $.each(data, function(i, item){
                    $('.sub-category').append(`<option value="${item.id}">${item.name}</option>`)
                  })
            },

            error: function(xhr, status, error){
              console.log(error);
            },

          })
        })

            /** get  child categories */
          $('body').on('change', '.sub-category', function(e){
          let id = $(this).val();
          $.ajax({
            method:'GET',
            url:"<?php echo e(route('vendor.product.get-child-categories')); ?>",
            data: {
                 id:id
            },
            success: function(data){
                 
                  $('.child-category').html('<option value="">Select</option>')
                  $.each(data, function(i, item){
                    $('.child-category').append(`<option value="${item.id}">${item.name}</option>`)
                  })
            },

            error: function(xhr, status, error){
              console.log(error);
            },

          })
        })
      })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('vendor.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/vendor/product/create.blade.php ENDPATH**/ ?>