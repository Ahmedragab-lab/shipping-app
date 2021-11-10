@extends('front.index')

@section('navbar-slider')
<div id="header-bottom-wrap" class="is-clearfix">
    <div id="header-bottom" class="site-header-bottom">
      <div id="header-bottom-inner" class="site-header-bottom-inner ">
        <section class="hero slider is-clearfix ">
          <h2 class="display-none">slider</h2>
          <div class="rev_slider_wrapper fullscreen-container ">
            <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7" style="display:none">
              <a href="#welcome" class="slider-scroll-down">scroll down</a>
              <ul>
                <li data-transition="fade" data-thumb="{{ asset('front/images/icons/1.png') }}" data-title="warehousing" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi." data-param2="{{ asset('front/images/icons/1.png') }}">
                  <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{ asset('front/images/slider/4.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                    data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                  <div class="tp-caption tp-resizeme small_text top" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                  <div class="tp-caption tp-resizeme large_text" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> local pickup and delivery
                    <br> services of any cargo. </div>
                  <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
                    <span>learn More</span>
                    <span class="icon is-small">
                      <i class="ion-ios-arrow-round-forward"></i>
                    </span>
                  </a>
                </li>
                <!-- slide -->
                <li data-transition="fade" data-thumb="{{ asset('front/images/icons/2.png') }}" data-title="air freight" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi." data-param2="{{ asset('front/images/icons/2.png') }}">
                  <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{ asset('front/images/slider/3.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                    data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                  <div class="tp-caption tp-resizeme small_text top" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                  <div class="tp-caption tp-resizeme large_text" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> local pickup and delivery
                    <br> services of any cargo. </div>
                  <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
                    <span>learn More</span>
                    <span class="icon is-small">
                      <i class="ion-ios-arrow-round-forward"></i>
                    </span>
                  </a>
                </li>
                <!-- slide -->
                <li data-transition="fade" data-thumb="{{ asset('front/images/icons/3.png') }}" data-title="ocean freight" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi." data-param2="{{ asset('front/images/icons/3.png') }}">
                  <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{ asset('front/images/slider/2.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                    data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                  <div class="tp-caption tp-resizeme small_text top" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                  <div class="tp-caption tp-resizeme large_text" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> local pickup and delivery
                    <br> services of any cargo. </div>
                  <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
                    <span>learn More</span>
                    <span class="icon is-small">
                      <i class="ion-ios-arrow-round-forward"></i>
                    </span>
                  </a>
                </li>
                <!-- slide -->
                <li data-transition="fade" data-thumb="{{ asset('front/images/icons/4.png') }}" data-title="land transport" data-param1="Lorem ipsum dolor sit ultrices eleifend gravi." data-param2="{{ asset('front/images/icons/4.png') }}">
                  <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{ asset('front/images/slider/1.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                    data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                  <div class="tp-caption tp-resizeme small_text top" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                    data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> logistics cargo </div>
                  <div class="tp-caption tp-resizeme large_text" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> local pickup and delivery
                    <br> services of any cargo. </div>
                  <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
                    <span>learn More</span>
                    <span class="icon is-small">
                      <i class="ion-ios-arrow-round-forward"></i>
                    </span>
                  </a>
                </li>
                <!-- slide -->
              </ul>
            </div>
            <!-- .rev_slider -->
          </div>
          <!-- .rev_slider_wrapper -->
        </section>
        <!-- .slider -->
      </div>
      <!-- #header-bottom-inner -->
    </div>
    <!-- #header-bottom -->
  </div>

@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <!-- works section -->
        <section class="section hero has-background-primary-light  works-list is-clearfix">
          <div class="container">
            <br>
            <div class="works works-shop isotope style-1 image-hover effect-10">
              <div class="columns is-variable is-4 is-multiline">
               @foreach ( $products as $product )
                    <div class="column is-4" data-aos="fade">
                        <div class="work-item">
                        <figure>
                            <a href="{{route('front.show',$product->id)}}">
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/'. $product->image) }}"> </a>
                            {{-- <figcaption>
                            <ul class="social">
                                <li>
                                <a href="../pages/shop-product.html" target="_blank">
                                    <span class="icon">
                                    <i class="icon-basket"></i>
                                    </span>
                                </a>
                                </li>
                                <li>
                                <a href="../pages/shop-product.html">
                                    <span class="icon">
                                    <i class="icon-link"></i>
                                    </span>
                                </a>
                                </li>
                            </ul>
                            </figcaption> --}}
                        </figure>
                        <div class="work-item-meta">
                            <h3>
                            <a href="{{route('front.show',$product->id)}}">{{ $product->product_name }}</a>
                            </h3>
                            <h5>
                            <a href="#">{{ $product->selling_price }} LE</a>
                            </h5>
                            <div class="shop-rating">
                            <span class="icon">
                                <i class="ion-md-star"></i>
                            </span>
                            <span class="icon">
                                <i class="ion-md-star"></i>
                            </span>
                            <span class="icon">
                                <i class="ion-md-star"></i>
                            </span>
                            <span class="icon">
                                <i class="ion-md-star"></i>
                            </span>
                            <span class="icon">
                                <i class="ion-md-star"></i>
                            </span>
                            </div>
                        </div>
                        </div>
                        <!-- .work-item -->
                    </div>
               @endforeach

              </div>
              <!-- .columns -->
            </div>
            <!-- .works -->
            <nav class="pagination is-centered">
              <a href="#" class="pagination-previous">Prev</a>
              <a href="#" class="pagination-next">Next</a>
              <ul class="pagination-list">
                <li>
                  <a href="#" class="pagination-link ">1</a>
                </li>
                <li>
                  <a href="#" class="pagination-link is-current">2</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">3</a>
                </li>
                <li>
                  <a href="#" class="pagination-ellipsis ">...</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">11</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">12</a>
                </li>
              </ul>
            </nav>
            <!-- .pagination -->
            <br> </div>
        </section>
        <!-- . -->
        <section class="section  is-clearfix">
          <div class="container">
            <nav class="level counterup ">
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">70</p>
                  <p class="heading">awards won</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">48</p>
                  <p class="heading">satisfied clients</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">56</p>
                  <p class="heading">startup growth</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="title counter">28</p>
                  <p class="heading">average prices</p>
                </div>
              </div>
            </nav>
            <!-- .counterup -->
          </div>
        </section>
      </div>
      <!-- #content-area-inner -->
    </div>
    <!-- #content-area -->
  </div>
@endsection
