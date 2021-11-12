
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  services
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('Edit services page')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('serv.index')); ?>" class="default-color">Edit services</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('table')); ?></li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
       
       <div class="card-body">
         <form action="<?php echo e(route('serv.update',$serv->id)); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">service name</label>
                    <input type="text" placeholder="Enter service name" name="serve_name" class="form-control" value="<?php echo e($serv->serve_name); ?>">
                </div>
                <div class="col-md-6 mb-3">
                   <label for="status">status</label>
                   <input type="checkbox"  name="status" <?php echo e($serv->status == 1?'checked':''); ?> >
                </div>
                <div class="col-md-12 mb-3">
                   <label for="desc">Description</label>
                    <textarea name="desc" id=""  rows="3" class="form-control"> <?php echo e($serv->desc); ?></textarea>
                </div>
               <div class="col-lg-6">
                   <label>Add image :  <span style="color:rgb(199, 8, 8)">*</span></label>
                   <input class="form-control img" name="image"  type="file">
               </div>
               <div class="col-lg-6 mb-3">
                   <img src="<?php echo e(asset('uploads/serv/'. $serv->image)); ?>" class="img-thumbnail img-preview" width="100" alt="no photo">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/services/edit.blade.php ENDPATH**/ ?>