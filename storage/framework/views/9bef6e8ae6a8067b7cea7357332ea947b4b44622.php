
<?php $__env->startSection('css'); ?>
    <?php echo toastr_css(); ?>
<?php $__env->startSection('title'); ?>
   تتبع الشحنة
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
تتبع الشحنة
<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                                            <th> id</th>
                                            <th>order-no </th>
                                            <th> step1</th>
                                            <th> step2</th>
                                            <th>step3</th>
                                            <th>step4</th>
                                            <th> date</th>
                                        
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $tracking_steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracking_step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($tracking_step->id); ?></td>
                                            <td><?php echo e($tracking_step->order-no); ?></td>
                                            <td><?php echo e($tracking_step->step1); ?></td>
                                            <td><?php echo e($tracking_step->step2); ?></td>
                                            <td><?php echo e($tracking_step->step3); ?></td>
                                            <td><?php echo e($tracking_step->step4); ?></td>
                                            <td><?php echo e($tracking_step->date); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('tracking_steps.edit',$tracking_step->id)); ?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_receipt<?php echo e($tracking_step->id); ?>" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php echo $__env->make('admin.tracking_steps.Delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/tracking_steps/index.blade.php ENDPATH**/ ?>