
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
  permission
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">permission</h4>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">permission list </li>
            </ol>
            </div>
            <div class="col-md-6">
                <a href="<?php echo e(route('roles.create')); ?>"  class="btn btn-primary btn-block"><i class="fa fa-times-rectangle-o"></i> Add permission</a>
            </div>
        </div>
    </div>
     

     
<div class="row ">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($role->name); ?></td>
                                    <td>
                                        
                                            <a class="btn btn-success btn-sm"
                                                href="<?php echo e(route('roles.show', $role->id)); ?>">عرض</a>
                                        

                                        
                                            <a class="btn btn-primary btn-sm"
                                                href="<?php echo e(route('roles.edit', $role->id)); ?>">تعديل</a>
                                        

                                        <?php if($role->name !== 'owner'): ?>
                                            
                                                <?php echo Form::open(['method' => 'DELETE', 'route' => ['roles.destroy',$role->id], 'style' => 'display:inline']); ?>

                                                <?php echo Form::submit('حذف', ['class' => 'btn btn-danger btn-sm']); ?>

                                                <?php echo Form::close(); ?>

                                            
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/roles/index.blade.php ENDPATH**/ ?>