
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
       addmin list
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partial.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> admin list</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">admin list</li>
            </ol>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('users.create')); ?>"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> Add admin</a>
        </div>
    </div>
</div>


<!-- row opened -->
<div class="row ">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered p-0" id="datatable" >
                        <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">اسم المستخدم</th>
                                <th class="wd-20p border-bottom-0">البريد الالكتروني</th>
                                <th class="wd-20p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">حالة المستخدم</th>
                                <th class="wd-15p border-bottom-0">نوع المستخدم</th>
                                <th class="wd-10p border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=0; ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $count++; ?>
                                <tr>
                                    <td><?php echo e($count); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><img src="<?php echo e(asset('uploads/user-img/'.$user->image)); ?>" class="img-thumbnail" width="70" alt=""></td>
                                    <td>
                                        <?php if($user->status == 'active'): ?>
                                            <h5 class="text-success d-flex"><?php echo e($user->status); ?></h5>
                                        <?php else: ?>
                                            <h5 class="text-danger d-flex"><?php echo e($user->status); ?></h5>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(!empty($user->getRoleNames())): ?>
                                            <?php $__currentLoopData = $user->roles_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <h5><label class="badge badge-success"><?php echo e($v); ?></label></h5>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('users.destroy', $user)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            
                                            <a href="<?php echo e(route('users.edit', $user)); ?>" class="btn btn-info"><?php echo e(__('Edit')); ?></a>
                                            
                                            
                                            <button type="button" class="btn btn-danger" onclick="confirm('<?php echo e(__('Are you sure you want to delete this admin?')); ?>') ? this.parentElement.submit() : ''">
                                                <?php echo e(__('Delete')); ?>

                                            </button>
                                            
                                        </form>
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
    <!--/div-->

    <!-- Modal effects -->
    



<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/client/index.blade.php ENDPATH**/ ?>