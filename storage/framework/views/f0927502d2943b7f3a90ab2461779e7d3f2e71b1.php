
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  services
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('services page')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="#" class="default-color">services</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('table')); ?></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <a href="<?php echo e(route('serv.create')); ?>" class="btn btn-primary">Add Service</a>
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
                                        <th>Service name</th>
                                        <th>description</th>
                                        <th>status</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$serv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index+1); ?></td>
                                            <td><?php echo e($serv->serve_name); ?></td>
                                            <td><?php echo e($serv->desc); ?></td>
                                            <td><?php echo e($serv->status ==1?'Avilable':'Unavilable'); ?></td>
                                            <td>
                                                <img src="<?php echo e(asset('uploads/serv/'.$serv->image)); ?>" alt="" width="100px" height="100px" class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('serv.edit',$serv->id)); ?>" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_serv<?php echo e($serv->id); ?>" title="delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php echo $__env->make('admin.services.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/services/index.blade.php ENDPATH**/ ?>