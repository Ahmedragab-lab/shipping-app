<!DOCTYPE html>
<html  class="no-js no-svg" dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>>
  <head>
   <?php echo $__env->make('front.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body class="active-pageloader corporate logistics header-sticky hide-on-scroll header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
    <div class="pageloader "></div> 
    
    <div id="site-wrap" class="site">
      <?php echo $__env->make('front.layout.header-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- #header-top-wrap -->
      <?php echo $__env->make('front.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- #header-wrap -->
      
      <?php echo $__env->yieldContent('navbar-slider'); ?>
      <!-- #header-bottom-wrap -->
      <!-- import content layouts and modules -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <!-- import content layouts and modules -->
            <!-- start adding page content -->
            <?php echo $__env->yieldContent('content'); ?>
          </div>
          <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
      </div>
     <?php echo $__env->make('front.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- #site-wrap -->
   <?php echo $__env->make('front.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/front/index.blade.php ENDPATH**/ ?>