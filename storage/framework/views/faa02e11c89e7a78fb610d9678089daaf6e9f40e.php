
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  products
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('Add products page')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('products.index')); ?>" class="default-color">Add products</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('table')); ?></li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
       
       <div class="card-body">
         <form action="<?php echo e(route('products.store')); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
             <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-control" name="cat_id">
                        <option value="" > Select a Category</option>
                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cat_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                 <div class="col-md-6 mb-3">
                     <label for="product_name">product name</label>
                     <input type="text" placeholder="Enter product name" name="product_name" class="form-control">
                 </div>
                 <div class="col-md-6 mb-3">
                     <label for="slug">slug</label>
                     <input type="text"  name="slug" class="form-control">
                 </div>
                 <div class="col-md-12 mb-3">
                    <label for="small_desc">Small_Description</label>
                    <textarea rows="3" class="form-control" name="small_desc"></textarea>
                  </div>
                 <div class="col-md-12 mb-3">
                    <label for="desc">Description</label>
                     <textarea name="desc" id=""  rows="3" class="form-control"></textarea>
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control" name="qty">
                </div>
                 <div class="col-md-6 mb-3">
                    <label for="status">status</label>
                    <input type="checkbox"  name="status" >
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="">trending</label>
                    <input type="checkbox"  name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="meta_title">meta_title</label>
                    <input type="text"  name="meta_title" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="meta_disc">meta_disc</label>
                    <textarea name="meta_desc" id=""  rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="meta_keywords">meta_keywords</label>
                    <textarea name="meta_keywords" id=""  rows="3" class="form-control"></textarea>
                </div>
                <div class="col-lg-6">
                    <label>Add image :  <span style="color:rgb(199, 8, 8)">*</span></label>
                    <input class="form-control img" name="image"  type="file">
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('uploads/product/default.jpg')); ?>" class="img-thumbnail img-preview" width="100" alt="">
                </div>
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Save</button>
                </div>
             </div>
         </form>
       </div>
   </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/products/create.blade.php ENDPATH**/ ?>