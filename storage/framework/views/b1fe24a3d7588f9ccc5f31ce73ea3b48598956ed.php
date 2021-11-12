<!-- Favicon -->
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->


<?php echo $__env->yieldContent('css'); ?>
<!--- Style css -->
<?php if(App::getLocale() == 'en'): ?>
    <link href="<?php echo e(asset('assets/css/ltr.css')); ?>" rel="stylesheet">
<?php else: ?>
    <link href="<?php echo e(asset('assets/css/rtl.css')); ?>" rel="stylesheet">
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/layouts/head.blade.php ENDPATH**/ ?>