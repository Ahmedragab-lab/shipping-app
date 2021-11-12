
<!DOCTYPE html>
<html dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo toastr_css(); ?>
</head>
<body>
    <div class="wrapper">
        <div id="pre-loader">
            <img src="<?php echo e(asset('assets/images/pre-loader/loader-01.svg')); ?>" alt="">
        </div>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-wrapper">
           <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- main content wrapper end-->
    </div>
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>