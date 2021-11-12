<div class="container-fluid">
    <div class="row">
      <!-- Left Sidebar start-->
      <div class="side-menu-fixed">
       <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
          <!-- menu item Dashboard-->
          <li>
            <a href="<?php echo e(route('home')); ?>" >
              <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"><?php echo e(__('site.dashboard')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="#" >
              <div class="pull-left"><span class="right-nav-text" style="color: rgb(236, 65, 65)"><?php echo e(__('site.wolf')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('users.index')); ?>">
              <div class="pull-left"><i class="fa fa-address-book"></i><span class="right-nav-text"><?php echo e(__('site.admins')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('client.index')); ?>">
              <div class="pull-left"><i class="fa fa-users"></i><span class="right-nav-text"><?php echo e(__('clients')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('roles.index')); ?>">
              <div class="pull-left"><i class="fa fa-times-rectangle"></i><span class="right-nav-text"><?php echo e(__('site.permissions')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements1">
              <div class="pull-left"><i class="fa fa-id-card-o"></i><span class="right-nav-text"><?php echo e(__('component')); ?></span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="elements1" class="collapse" data-parent="#sidebarnav">
              <li><a href="<?php echo e(route('cats.index')); ?>">categories</a></li>
              <li><a href="<?php echo e(route('products.index')); ?>">Products</a></li>

            </ul>
          </li>
          <li>
            <a href="<?php echo e(route('serv.index')); ?>">
              <div class="pull-left"><i class="fa fa-times-rectangle"></i><span class="right-nav-text"><?php echo e(__('site.serv')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>

          <li>
            <a href="<?php echo e(route('tracking_steps.index')); ?>">
              <div class="pull-left"><i class="fa fa-times-rectangle"></i><span class="right-nav-text"><?php echo e(__('site.tracking-steps')); ?></span></div>
              <div class="clearfix"></div>
            </a>
          </li>
        </ul>
    </div>
  </div>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>