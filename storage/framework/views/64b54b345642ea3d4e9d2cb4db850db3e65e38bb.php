<script src="<?php echo e(asset('front/js/jquery-3.6.0.min')); ?>"></script>
<script src="<?php echo e(asset('front/js/vendor.min.js?v=1557446391092')); ?>"></script>
<script src="<?php echo e(asset('front/js/scripts.min.js?v=1557446391092')); ?>"></script>
<script src="<?php echo e(asset('front/js/custom.js?v=1557446391092')); ?>"></script>
<script src="<?php echo e(asset('front/js/owl.carousel.min')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/front/layout/script.blade.php ENDPATH**/ ?>