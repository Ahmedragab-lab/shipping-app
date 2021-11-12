<?php if($errors->any()): ?>
    <div class="alert alert-danger " >
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session()->has('Add')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="padding-right: 35px;"><?php echo e(session()->get('Add')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(session()->has('Edit')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="padding-right: 35px;"><?php echo e(session()->get('Edit')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(session()->has('Delete')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong style="padding-right: 35px;"><?php echo e(session()->get('Delete')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/partial/error.blade.php ENDPATH**/ ?>