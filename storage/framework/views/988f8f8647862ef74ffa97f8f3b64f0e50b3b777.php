
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  products
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('products page')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="#" class="default-color">products</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('table')); ?></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Add Product</a>
        </div>
    </div>
 <!-- row -->
 <div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                       data-page-length="50"
                                       style="text-align: center">
                                    <thead>
                                    <tr class="alert-success">
                                        <th>#</th>
                                        <th>category name</th>
                                        <th>product name</th>
                                        <th>description</th>
                                        <th>Original Price</th>
                                        <th>Selling Price</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index+1); ?></td>
                                            <td><?php echo e($product->cat->cat_name); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td><?php echo e($product->desc); ?></td>
                                            <td><?php echo e($product->original_price); ?></td>
                                            <td><?php echo e($product->selling_price); ?></td>
                                            <td>
                                                <img src="<?php echo e(asset('uploads/product/'.$product->image)); ?>" alt="" width="100px" height="100px" class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_product<?php echo e($product->id); ?>" title="delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php echo $__env->make('admin.products.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/products/index.blade.php ENDPATH**/ ?>