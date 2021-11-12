<!--=================================
 header start-->

 <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="#"><img src="<?php echo e(asset('assets/images/logo-wolf.jpg')); ?>" width="200" height="50" alt=""></a>
      <a class="navbar-brand brand-logo-mini" href="#"><img src="<?php echo e(asset('assets/images/logo-icon-dark.png')); ?>" alt=""></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
      </li>
      <li class="nav-item">
        <div class="search">
          <a class="search-btn not_click" href="javascript:void(0);"></a>
          <div class="search-box not-click">
            <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
            <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
          </div>
        </div>
      </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">
        <div class="btn-group mb-1">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php if(App::getLocale() == 'ar'): ?>
              <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

             <img src="<?php echo e(URL::asset('assets/images/flags/EG.png')); ?>" alt="">
              <?php else: ?>
              <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

              <img src="<?php echo e(URL::asset('assets/images/flags/US.png')); ?>" alt="">
              <?php endif; ?>
              </button>
            <div class="dropdown-menu">
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                        </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
      <li class="nav-item fullscreen">
        <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="ti-bell"></i>
          <span class="badge badge-danger notification-status"> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
          <div class="dropdown-header notifications">
            <strong>Notifications</strong>
            <span class="badge badge-pill badge-warning">05</span>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">New registered user <small class="float-right text-muted time">Just now</small> </a>
          <a href="#" class="dropdown-item">New invoice received <small class="float-right text-muted time">22 mins</small> </a>
          <a href="#" class="dropdown-item">Server error report<small class="float-right text-muted time">7 hrs</small> </a>
          <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1 days</small> </a>
          <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2 days</small> </a>
        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-big">
          <div class="dropdown-header">
            <strong>Quick Links</strong>
          </div>
          <div class="dropdown-divider"></div>
          <div class="nav-grid">
            <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i><h5>New Task</h5></a>
            <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i><h5>Assign Task</h5></a>
          </div>
          <div class="nav-grid">
            <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i><h5>Add Orders</h5></a>
            <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i><h5>New Orders</h5></a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown mr-30">
        <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo e(asset('assets/images/wolf.jpg')); ?>" alt="avatar">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header">
            <div class="media">
              <div class="media-body">
                <h5 class="mt-0 mb-0"><?php echo e(Auth::user()->name); ?></h5>
                <span><?php echo e(Auth::user()->email); ?></span>
              </div>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo e(route('front')); ?>"><i class="text-secondary ti-reload"></i> go to shipping site</a>
          <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
          <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
          <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span class="badge badge-info">6</span> </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
            class="bx bx-log-out"></i>log out</a>
         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
         </form>
        </div>
      </li>
    </ul>
  </nav>

  <!--=================================
   header End-->
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/layouts/nav.blade.php ENDPATH**/ ?>