
<?php $__env->startSection('content'); ?>
  
 <!-- Main Content -->
  
 <section class="section">
  <div class="section-header">
    <h1>Product</h1>
   
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12 ">
        <div class="card">
          <div class="card-header">
            <h4>Update Product</h4>
          </div>
          <div class="card-body">
           <form action="<?php echo e(route('admin.products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
              <label>Preview</label>
              <br>
              <img src="<?php echo e(asset($product->thumb_image)); ?>" style="width:200px" alt="">
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name="image" >
            </div>

            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo e($product->name); ?>">
            </div>

          <div class="row" >
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="inputState">Category</label>
                  <select id="inputState" class="form-control main-category" name="category">
                    <option value="">Select</option>
                   <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option <?php echo e($category->id == $product->category_id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4" >
                <div class="form-group ">
                  <label for="inputState">Sub Category</label>
                  <select id="inputState" class="form-control sub-category" name="sub_category">
                    <option value="">Select</option>
                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($subCategory->id == $product->sub_category_id ? 'selected' : ''); ?> value="<?php echo e($subCategory->id); ?>"><?php echo e($subCategory->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="inputState">Child Category</label>
                  <select id="inputState" class="form-control child-category" name="child_category">
                    <option value="">Select</option>
                    <?php $__currentLoopData = $childCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($childCategory->id == $product->child_category_id ? 'selected' : ''); ?> value="<?php echo e($childCategory->id); ?>"><?php echo e($childCategory->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
          </div>
          
          
          <div class="form-group ">
             <label for="inputState">Brand</label>
                <select id="inputState" class="form-control " name="brand">
                  <option value="">Select</option>
                  <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                  <option <?php echo e($brand->id == $product->brand_id ? 'selected' : ''); ?> value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
          </div>
         
          
          <div class="form-group">
            <label>SKU</label>
            <input type="text" class="form-control" name="sku" value="<?php echo e($product->sku); ?>">
          </div>
          
          <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" value="<?php echo e($product->price); ?>">
          </div>
          
          <div class="form-group">
            <label>Offer Price</label>
            <input type="text" class="form-control" name="offer_price" value="<?php echo e($product->offer_price); ?>">
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Offer Srart Date</label>
                <input type="text" class="form-control datepicker" name="offer_start_date" value="<?php echo e($product->offer_start_date); ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Offer End Date</label>
                <input type="text" class="form-control datepicker" name="offer_end_date" value="<?php echo e($product->offer_end_date); ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Stock Quantity</label>
            <input type="number" min="0" class="form-control" name="qty" value="<?php echo e($product->qty); ?>">
          </div>

          <div class="form-group">
            <label>Video Link</label>
            <input type="text" class="form-control" name="video_link" value="<?php echo e($product->video_link); ?>">
          </div>

          <div class="form-group">
            <label>Short Description</label>
            <textarea name="short_description" class="form-control" ><?php echo $product->short_description; ?></textarea>
          </div>

          <div class="form-group">
            <label>Long Description</label>
            <textarea name="long_description" class="form-control summernote" ><?php echo $product->long_description; ?></textarea>
          </div>

        
              
           
            <div class="form-group ">
              <label for="inputState">Product Type</label>
              <select id="inputState" class="form-control" name="product_type">
                <option value="">Select</option>
                <option <?php echo e($product->product_type == 'new_arrival' ? 'selected' : ''); ?> value="new_arrival">New Arrival</option>
                <option <?php echo e($product->product_type == 'featured_product' ? 'selected' : ''); ?> value="featured_product">Featured</option>
                <option <?php echo e($product->product_type == 'top_product' ? 'selected' : ''); ?> value="top_product">Top Product</option>
                <option <?php echo e($product->product_type == 'best_product' ? 'selected' : ''); ?> value="best_product">Best Product</option>



              </select>
            </div>
           
          

          <div class="form-group">
            <label>Seo Title</label>
            <input type="text" class="form-control" name="seo_title" value="<?php echo e($product->seo_title); ?>">
          </div>

          <div class="form-group">
            <label>Seo Description</label>
            <textarea name="seo_description" class="form-control" ><?php echo $product->seo_description; ?></textarea>
          </div>

          
            <div class="form-group ">
              <label for="inputState">Status</label>
              <select id="inputState" class="form-control" name="status">
                <option <?php echo e($product->status == 1 ? 'selected' : ''); ?> value="1">Active</option>
                <option <?php echo e($product->status == 0 ? 'selected' : ''); ?> value="0">Inactive</option>
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
        $('body').on('change', '.main-category', function(e){

          $('.child-category').html('<option value="">Select</option>')

          let id = $(this).val();
          $.ajax({
            method:'GET',
            url:"<?php echo e(route('admin.product.get-subcategories')); ?>",
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
            url:"<?php echo e(route('admin.product.get-child-categories')); ?>",
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Awadd\project\e-commerce\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>