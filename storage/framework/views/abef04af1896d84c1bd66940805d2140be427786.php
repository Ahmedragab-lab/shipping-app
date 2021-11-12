<div id="header-top-wrap" class="is-clearfix">
    <div id="header-top" class="site-header-top">
      <div id="header-top-inner" class="site-header-top-inner container">
        <div class="level">
          <div class="level-left">
            <ul class="topbar-info ">
              <li>
                <a href="#">
                  <span class="icon">
                    <i class="icon-clock"></i>
                  </span> Mon - Fri : 09:00 - 17:00 </a>
              </li>
              <li>
                <a href="mailto:info@company.com">
                  <span class="icon">
                    <i class="icon-envelope"></i>
                  </span> info@company.com </a>
              </li>
              <li>
                <a href="tel:+66396847263">
                  <span class="icon">
                    <i class="icon-phone"></i>
                  </span> +201021493036 </a>
              </li>
            </ul>
          </div>
          <!-- .level-left -->
          <div class="level-right">
            <ul class="header-menu-icons social">
              <li>
                <a href="#" target="_blank">
                  <span class="icon">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <span class="icon">
                    <i class="fab fa-twitter"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <span class="icon">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                </a>
              </li>
            </ul>
            <!-- .header-menu-icons -->
            <ul class="nav-menu-dropdown style-2 global-style on-click">
              <li>
                <a href="javascript:void(0);">
                  <span class="icon">
                    <i class="icon-globe"></i>
                  </span>global</a>
                <ul>
                  <li>
                    <a href="javascript:void(0);">Africa</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">europe</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">America</a>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- .header-menu-icons -->
            <ul class="nav-menu-dropdown style-2 on-click">
                        <li>
                            <span class="flag-icon flag-icon-<?php echo e(App::getLocale() == 'en' ?'us':'eg'); ?>"></span><a href="javascript:void(0);"><?php echo e(LaravelLocalization::getCurrentLocale()); ?></a>
                            <ul>
                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                            <?php echo e($properties['native']); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- 








 -->
                            </ul>
                        </li>
                    </ul>




            <!-- .header-menu-icons -->
          </div>
          <!-- .level-right -->
        </div>
        <!-- .level -->
      </div>
      <!-- #header-top-inner -->
    </div>
    <!-- #header-top -->
  </div>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/front/layout/header-top.blade.php ENDPATH**/ ?>