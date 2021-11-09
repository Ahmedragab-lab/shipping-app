<!DOCTYPE html>
<html lang="en" class="no-js no-svg">
  <head>
   @include('front.layout.head')
  </head>
  <body class="active-pageloader corporate logistics header-sticky hide-on-scroll header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
    <div class="pageloader is-active"></div>
    <div id="site-wrap" class="site">
      @include('front.layout.header-top')
      <!-- #header-top-wrap -->
      @include('front.layout.navbar')
      <!-- #header-wrap -->
      @include('front.layout.navbar-slider')
      <!-- #header-bottom-wrap -->
      <!-- import content layouts and modules -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <!-- import content layouts and modules -->
            <!-- start adding page content -->
            @yield('content')
          </div>
          <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
      </div>
     @include('front.layout.footer')
    </div>
    <!-- #site-wrap -->
   @include('front.layout.script')
  </body>
</html>
