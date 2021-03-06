
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
<h1>hello</h1>
  <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
    <div class="container">
      <p class="heading-title-top has-text-centered">welcome logistics</p>
      <h1 class="heading-title style-3"> Our
        {{-- <br> difference. --}}
        <span class="has-text-primary">Products</span>
      </h1>
      <br>
      <br>
      <div class="blog-list style-2 columns is-variable is-4 is-multiline">
        <div class="owl-carousel owl-theme">
            @foreach ( $products as $product)
                <div class=" item" >
                    <article class="blog-post">
                    <figure class="post-image">
                        <a href="{{route('front.show',$product->id)}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/product/'. $product->image) }}"> </a>
                    </figure>
                    <div class="entry-header">
                        <h2 class="entry-title">
                        <a href="#">{{ $product->product_name}}</a>
                        </h2>
                        <span class="float-start entry-title">{{ $product->selling_price }}</span>
                        <span class="float-end "><s>{{ $product->original_price }}</s></span>
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <p>{{ $product->desc }}</p>

                    </div>
                    <!-- .entry-content -->
                    <div class="entry-footer">
                        <a href="{{route('front.show',$product->id)}}" class="button">More details</a>
                    </div>
                    </article>
                    <!-- .blog-post -->
                </div>
            @endforeach
       </div>
      </div>
      <br> </div>
  </section>
  <section id="tracking" class="section tracking-section is-clearfix">
    <div class="container">
      <p class="heading-title-top has-text-centered">tracking</p>
      <h1 class="heading-title style-3">track your shipment</h1>
      <div class="columns is-mobile is-centered">
        <div class="column is-10" data-aos="fade-up">
          <div class="subscribe-form style-1">
            <form>
              <div class="field has-addons has-addons-centered is-grouped">
                <div class="control">
                  <input class="input" type="text" placeholder="Type your tracking number"> </div>
                <div class="control">
                  <a href="#" class="button">
                    <span>Track it</span>
                    <span class="icon is-small">
                      <i class="icon-target"></i>
                    </span>
                  </a>
                </div>
              </div>
            </form>
          </div>
          <p class="help"> separate multiple tracking numbers with a space or comma.
            <a href="#">Advanced Tracking</a>
          </p>
        </div>
      </div>
    </div>
  </section>
 {{-- section services=================================================================================================================== --}}
 <section id="services" class="section services-section has-background-primary-light is-clearfix">
    <div class="container">
      <div class="columns is-variable is-multiline is-4">
        <div class="column is-5-desktop is-12-tablet">
          <p class="heading-title-top">logistics services</p>
          <h1 class="heading-title style-3 has-text-left">our special services</h1>
        </div>
        <div class="column is-7-desktop is-12-tablet">
          <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
        </div>
      </div>
      <br>
      <div class="columns is-variable is-4 is-multiline boxes-style-2">
          {{-- show services limit 6 in front home page --}}
            @foreach ( $servs as $serv)
                <div class="column is-4" >
                    <div class="box-item">
                    <a href="#">
                        {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/icons/4.png') }}">  --}}
                        <img alt="no photo" src="{{ asset('uploads/serv/'.$serv->image) }}" style="max-height: 344px ;">
                    </a>
                    <h3>
                        <a href="#">{{ $serv->serve_name }}</a>
                    </h3>
                    <p>{{ $serv->desc }}</p>
                    <p>{{ $serv->status == 1 ?'Available':'Unavialable' }}</p>
                    <a href="{{ route('order') }}" class="button"> Make Order</a>
                    </div>
                    <!-- .box-item -->
                </div>
            @endforeach
      </div>
    </div>
  </section>
 {{-- End section services=================================================================================================================== --}}
  <section class="section watch-video is-clearfix">
    <div class="container">
      <br>
      <br>
      <div class="columns is-variable is-8 is-multiline">
        <div class="column is-6-desktop is-12-tablet has-text-centered" >
          <div class="works-latest">
            <div class="works-latest-item">
              {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/global/introduction.png') }}"> --}}
              <div class="works-latest-item-icon style-2">
                {{-- <a href="https://www.youtube.com/watch?v=jc4y2Xqerj0" class="mfp-lightbox mfp-iframe"> --}}
                <iframe class="mfp-lightbox mfp-iframe " width="500" height="200" src="https://www.youtube.com/embed/jHGzIrM4UbA"
                 frameborder="0" allow="autoplay; encrypted-media;" allowfullscreen></iframe>
                 {{-- <iframe width="1280" height="720" src="https://www.youtube.com/embed/jHGzIrM4UbA" title="YouTube video player"
                 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                  {{-- <span class="icon ripple-effect">
                    <i class="ion-ios-play"></i>
                  </span> --}}
                </a>
              </div>
              <!-- .works-latest-icon -->
            </div>
            <!-- .works-latest-item -->
          </div>
        </div>
        <div class="column is-6-desktop is-12-tablet" >
          <br>
          <h1 class="heading-title style-3 has-text-left"> local pickup with logistics
            <br> services of any
            <span class="has-text-primary">cargo.</span>
          </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravi, nulla nunc varius lectus, nec rutrum justo nibh eu lectus metus ultrices.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravi.</p>
          <br>
          <div class="level">
            <div class="level-left">
              <h4>Mohamed Saad
                <br>
                <span>CEO & Founder</span>
              </h4>
            </div>
            <div class="level-right">
              <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/global/mark.png') }}"> </div>
          </div>
        </div>
      </div>
      <br> </div>
  </section>
  <section class="hero fun-facts is-clearfix">
    <div class="hero-body">
      <h2 class="display-none">funfacts</h2>
      <nav class="level counterup style-5">
        <div class="level-item has-text-centered">
          <div>
            <p class="title counter">340</p>
            <p class="heading">years of experience</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="title counter">120</p>
            <p class="heading">branches over world</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="title counter">230</p>
            <p class="heading">tonnes transported</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="title counter">110</p>
            <p class="heading">countries covered</p>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
    <div class="container">
      <p class="heading-title-top has-text-centered">tracking</p>
      <h1 class="heading-title style-3">how we work</h1>
      <br>
      <br>
      <div class="steps" data-aos="fade-right">
        <div class="step-item" data-step-id="0">
          <div class="step-marker"> 1 </div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item active" data-step-id="1">
          <div class="step-marker">2</div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item" data-step-id="2">
          <div class="step-marker">3</div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item" data-step-id="3">
          <div class="step-marker"> 4 </div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="news" class="section news-section is-clearfix">
    <div class="container">
      <div class="blog-list style-2 columns is-variable is-4 is-multiline">
        <div class="column is-4" data-aos="fade">
          <div class="blog-post-heading">
            <p class="heading-title-top">latest news</p>
            <h1 class="heading-title style-3 has-text-left"> Lorem ipsum is
              <span class="has-text-primary">simply</span>
            </h1>
            <p>Lorem ipsum dolor sit amet is, consectetur adipiscing. Nulla accumsan, metus ultrices ele gravi, nulla nunc varius.</p>
            <a href="./blog/index.html" class="button">Our blog
              <span class="icon">
                <i class="ion-ios-arrow-round-forward"></i>
              </span>
            </a>
          </div>
          <!-- .blog-post -->
        </div>
        <div class="column is-4" data-aos="fade">
          <article class="blog-post">
            <figure class="post-image">
              <a href="./blog/single.html">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/blog/4.png') }}"> </a>
            </figure>
            <div class="entry-header">
              <div class="post-meta">
                <ul>
                  <li>
                    <a href="#">
                      <span>APRIL 5, 2018</span>
                    </a>
                  </li>
                </ul>
              </div>
              <h2 class="entry-title">
                <a href="./blog/single.html">Self Motivation How To Keep Land Transport</a>
              </h2>
            </div>
            <div class="entry-footer">
              <a href="./blog/single.html" class="button">Read More</a>
            </div>
          </article>
          <!-- .blog-post -->
        </div>
        <div class="column is-4" data-aos="fade">
          <article class="blog-post">
            <figure class="post-image">
              <a href="./blog/single.html">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/blog/4.png') }}"> </a>
            </figure>
            <div class="entry-header">
              <div class="post-meta">
                <ul>
                  <li>
                    <a href="#">
                      <span>APRIL 5, 2018</span>
                    </a>
                  </li>
                </ul>
              </div>
              <h2 class="entry-title">
                <a href="./blog/single.html">Self Motivation How To Keep Land Transport</a>
              </h2>
            </div>
            <div class="entry-footer">
              <a href="./blog/single.html" class="button">Read More</a>
            </div>
          </article>
          <!-- .blog-post -->
        </div>
      </div>
    </div>
  </section>
 {{-- start client feedback --}}
 <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
    <div class="container">
      <p class="heading-title-top has-text-centered">testimonial</p>
      <h1 class="heading-title style-3">clients feedback</h1>
      <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">

       @foreach ( $feedbacks as $feedback)
       <div class="testimonials-item">
        <p>{{ $feedback->feedback }}</p>
        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/user-img/'. $feedback->client->image) }}">
        <h3>{{ $feedback->client->name }}
          <br>
          <span>{{ $feedback->serv->serve_name}} Services</span>
        </h3>
      </div>
       @endforeach
      </div>
    </div>
  </section>
 {{-- end client feedback --}}
  <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
    <div class="container">
      <div class="columns is-variable is-2 is-multiline">
        <div class="column is-6-desktop is-12-tablet" >
          <h1 class="heading-title style-3 has-text-left"> request a
            <span class="has-text-primary">quote</span>
          </h1>
          <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
          <!-- successful form message -->
          <div class="overhang-message-content is-hidden success">
            <span class="icon">
              <i class="ion-md-notifications"></i>
            </span> Thank You! Your message was sent successfully. </div>
          <!-- error form message -->
          <div class="overhang-message-content is-hidden error">
            <span class="icon">
              <i class="ion-md-notifications"></i>
            </span> Oops! Something went wrong, we couldn't send your message. </div>
          <!-- ajax contact form -->
          <form accept-charset="UTF-8" class="ajax-contact-form" action="https://usebasin.com/f/3587049dbc33.json" method="POST">
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="text" name="name" placeholder="Name" required> </div>
                </div>
                <!-- .field -->
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="email" name="email" placeholder="Email" required=""> </div>
                </div>
                <!-- .field -->
              </div>
              <!-- .field-body -->
            </div>
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="text" name="subject" placeholder="Subject" required=""> </div>
                </div>
                <!-- .field -->
                <div class="field">
                  <div class="control is-expanded">
                    <div class="select">
                      <select>
                        <option>Air Freight</option>
                        <option>Land Transport</option>
                        <option>Ocean Freight</option>
                        <option>Warehousing</option>
                      </select>
                    </div>
                  </div>
                  <!-- .field -->
                </div>
                <!-- .field-body -->
              </div>
            </div>
            <div class="field ">
              <div class="control is-expanded">
                <textarea class="textarea" name="textarea" placeholder="Message" required=""></textarea>
              </div>
            </div>
            <div class="field ">
              <div class="control">
                <button class="button" type="submit">request a quote</button>
              </div>
            </div>
          </form>
        </div>
        <div class="column is-6-desktop is-12-tablet"  data-aos-delay="600">
          <br>
          <br>
          <br>
          <br>
          <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/global/man.png') }}">
        </div>
      </div>
    </div>
  </section>
@endsection

