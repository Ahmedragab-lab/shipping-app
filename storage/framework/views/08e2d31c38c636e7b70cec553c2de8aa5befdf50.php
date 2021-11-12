
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  categories
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('Add categories page')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('cats.index')); ?>" class="default-color">Add categories</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('table')); ?></li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
       
       <div class="card-body">
         <form action="<?php echo e(route('cats.store')); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
             <div class="row">
                 <div class="col-md-6 mb-3">
                     <label for="cat_name">categorie name</label>
                     <input type="text" placeholder="Enter categorie name" name="cat_name" class="form-control">
                 </div>
                 <div class="col-md-6 mb-3">
                     <label for="slug">slug</label>
                     <input type="text"  name="slug" class="form-control">
                 </div>
                 <div class="col-md-12 mb-3">
                    <label for="desc">Description</label>
                     <textarea name="desc" id=""  rows="3" class="form-control"></textarea>
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="status">status</label>
                    <input type="checkbox"  name="status" >
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="popular">popular</label>
                    <input type="checkbox"  name="popular" >
                </div>
                <div class="col-md-12 mb-3">
                    <label for="meta_title">meta_title</label>
                    <input type="text"  name="meta_title" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="meta_disc">meta_disc</label>
                    <textarea name="meta_disc" id=""  rows="3" class="form-control"></textarea>
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
                    <img src="<?php echo e(asset('uploads/cat/default.jpg')); ?>" class="img-thumbnail img-preview" width="100" alt="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/cats/create.blade.php ENDPATH**/ ?>