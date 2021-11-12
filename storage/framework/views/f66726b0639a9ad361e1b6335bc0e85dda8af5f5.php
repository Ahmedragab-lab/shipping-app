
<?php $__env->startSection('css'); ?>
  <?php $__env->startSection('title'); ?>
       dashboard
  <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> <?php echo e(__('site.dashboard')); ?></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('site.dashboard')); ?></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">Services</p>
                            <h4><?php echo e($serv); ?></h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 81% lower growth
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                        <span class="text-warning">
                            <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">Products</p>
                            <h4><?php echo e($product); ?></h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Total sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                        <span class="text-warning">
                            <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">Categories</p>
                            <h4><?php echo e($cat); ?></h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Total sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">Clients</p>
                            <h4><?php echo e($client); ?></h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Sales Per Week
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                        <span class="text-primary">
                            <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="float-right text-right">
                        <p class="card-text text-dark">Followers</p>
                        <h4>62,500+</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/home.blade.php ENDPATH**/ ?>